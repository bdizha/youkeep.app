<?php

use App\Address;
use App\City;
use App\Product;
use App\ProductPhoto;
use App\ProductType;
use App\ProductVariant;
use App\Province;
use App\Serve;
use App\Store;
use App\StoreAddress;
use App\StoreServe;
use GuzzleHttp\Client;

class RestaurantSeeder extends DatabaseSeeder
{
    protected $domain = "https://www.ubereats.com";
    protected $storeId = null;

    protected $storeIds = [];
    protected $categories = [];
    protected $level = -1;
    protected $filterBrand = [];
    protected $parentCategory = null;
    protected $productItems = [];
    protected $productVariantId = null;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setApp();

        $this->getFetchStores();
        die("Well done.");
    }

    public function getFetchStores()
    {
        $link = url("/api/home/categories");

        $crawler = Goutte::request('GET', $link);
        $regionNodes = $crawler->filter('.cj > div > div');

        $regionNodes->each(function ($node) {
            echo __LINE__ . " <> \n";

            if ($node->filter('.cc')->count()) {
                $regionName = $node->filter('.cc')->text();
                $locationNodes = $node->filter('.ev');

                $values = ['name' => str_replace("-", " ", $regionName)];
                $province = Province::updateOrCreate($values, $values);

                echo ">>>>>> Province inserted : " . $province->name . "\n";

                $locationNodes->each(function ($node) use ($province) {
                    echo __LINE__ . " <> \n";
                    $cityNode = $node->filter('a');
                    $cityName = $cityNode->text();

                    $attributes = [
                        'name' => $cityName,
                        'province_id' => $province->id
                    ];

                    $values = [
                        'name' => $cityName,
                        'province_id' => $province->id,
                        'is_main' => true,
                        'is_featured' => true
                    ];

                    $city = City::updateOrCreate($attributes, $values);

                    echo ">>>>>>>>> City inserted : " . $city->name . "\n";

                    if (true) {
                        $storeLink = url("/api/home/json");

                        $storeJson = file_get_contents($storeLink);
                        $storesData = json_decode($storeJson, true);

                        foreach ($storesData['data']['feedItems'] as $feedItem) {
                            if(!empty($feedItem['type']) && $feedItem['type'] == 'REGULAR_STORE') {
                                // fetch the store data
                                $storeLink = 'https://www.ubereats.com/api/getStoreV1?localeCode=za';
                                $client = new Client();

                                $fields = [
                                    'form_params' => [
                                        'sfNuggetCount' => 37,
                                        'storeUuid' => $feedItem['uuid']
                                    ],
                                    'headers' => [
                                        'x-csrf-token' => 'x',
                                        'x-uber-xps' => 'nothing',
                                    ]
                                ];

                                $response = $client->request('POST', $storeLink, $fields);

                                echo $response->getStatusCode();

                                $storeData = json_decode($response->getBody(), true)['data'];

                                if (count($storeData) > 0) {
                                    $this->setStore($storeData);
                                    $this->setAddress($storeData);
                                    $this->setServes($storeData);
                                    $this->setCatalog($storeData);
                                }
                            }
                        };
                    }
                });
            }
        });
    }

    /**
     * @param $data
     */
    private function setStore($data)
    {
        $attributes = [
            'name' => $data['title'],
            'url' => $data['uuid'],
        ];

        $photoData = array_pop($data['heroImageUrls']);

        $photoUrl = null;
        if (!empty($photoData['url'])) {
            $photoUrl = $photoData['url'];
        }

        $data['photo'] = $this->getSha1File('store', $photoUrl);

        $tradingHours = [];
        foreach ($data['hours'] as $hours) {
            $tradingHours[] = [
                'day' => $hours['dayRange'],
                'hours' => $hours['sectionHours']
            ];
        }

        $rating = @$data['storeInfoMetadata']['rawRatingStats']['storeRatingScore'];
        $ratingCount = @$data['storeInfoMetadata']['rawRatingStats']['ratingCount'];

        $values = [
            'name' => $data['title'],
            'description' => 'Not set',
            'content' => 'Not set',
            'photo' => $data['photo'],
            'trading_hours' => serialize($tradingHours),
            'phone' => $data['phoneNumber'],
            'order' => 1,
            'can_deliver' => true,
            'can_pickup' => true,
            'rating' => (int)$rating,
            'rating_count' => (int)$ratingCount,
            'app_id' => $this->app->id,
            'is_active' => true
        ];

        $this->store = Store::updateOrCreate($attributes, $values);

        echo ">>>>>>Inserting store: {$this->store->name} \n";
    }

    /**
     * @param $storeData
     */
    private function setAddress($storeData)
    {
        $location = $storeData['location'];

        $attributes = [
            'address_line' => $location['address'],
        ];

        $values = [
            'suburb' => null,
            'address_line' => $location['address'],
            'address_line_2' => $location['streetAddress'],
            'postal_code' => $location['postalCode'],
            'city' => $location['city'],
            'province' => $location['region'],
            'country_id' => 206,
            'latitude' => $location['latitude'],
            'longitude' => $location['longitude'],
            'user_id' => 1
        ];

        $address = Address::updateOrCreate($attributes, $values);
        $values = [
            'store_id' => $this->store->id,
            'address_id' => $address->id
        ];

        StoreAddress::updateOrCreate($values, $values);
    }

    /**
     * @param $storeData
     */
    private function setServes($storeData): void
    {
        // set the serves cuisine
        foreach ($storeData['cuisineList'] as $serveName) {
            $values = [
                'name' => $serveName,
                'description' => 'Not set',
                'app_id' => $this->app->id,
            ];

            $serve = Serve::updateOrCreate($values, $values);

            $values = [
                'store_id' => $this->store->id,
                'serve_id' => $serve->id,
            ];

            StoreServe::updateOrCreate($values, $values);
        }
    }

    /**
     * @param $filterSets
     */
    protected function setProductTypes($filterSets): void
    {
        $productTypes = ProductType::$types;
        $productTypeKeys = array_flip($productTypes);

        foreach ($filterSets as $filterItem) {
            $name = $filterItem['name'];
            $name = trim($name);

            $typeName = $filterItem['type'];

            $type = $productTypeKeys[$typeName];

            echo ">>>>>>Inserting service type: {$name} with type: {$typeName} \n";

            $attributes = [
                'name' => $name
            ];

            $values = [
                'name' => $name,
                'type' => $type,
            ];

            $productType = ProductType::updateOrCreate($attributes, $values);
            echo ">>>>>>Inserting {$productType->name} product variant: {$name} \n";

            $this->setProductVariant($filterItem, $productType);
        }

        $this->filterBrand = [];
    }

    protected function testResponse($productLink)
    {
        $productNode = Goutte::request('GET', $productLink)
            ->filter('meta[itemprop=description]')->eq(0);

        $productNode = Goutte::request('GET', $productLink);

        $description = $this->getProductDescription($productNode->html());

        dd($description);
    }

    /**
     * @param $storeData
     */
    private function setCatalog($storeData): void
    {
        $sectionEntitiesMap = @$storeData['sectionEntitiesMap'];
        $subsectionUuids = @$storeData['sections'][0]['subsectionUuids'];
        $uuid = @$storeData['sections'][0]['uuid'];

        foreach ($subsectionUuids as $subSectionUid) {
            $itemUuids = @$storeData['subsectionsMap'][$subSectionUid]['itemUuids'];
            $categoryName = @$storeData['subsectionsMap'][$subSectionUid]['title'];

            foreach ($itemUuids as $itemUuid) {
                $itemData = $sectionEntitiesMap[$uuid][$itemUuid];

                $photo = null;

                if (!empty($itemData['imageUrl'])) {
                    $photo = $this->getSha1File('product', $itemData['imageUrl']);
                }

                $this->storeId = $this->store->id;
                $this->level = 1;

                $this->setCategory($categoryName);

                $productItem = [
                    'name' => $itemData['title'],
                    'external_url' => $itemData['uuid'],
                    'price' => $itemData['price'] / 100,
                    'discount' => $itemData['price'] / 100,
                    'summary' => $itemData['title'],
                    'description' => 'Not set',
                    'photo' => $photo
                ];

                $this->setProduct($productItem, $this->storeCategory);

                // fetch the store data
                $storeLink = 'https://www.ubereats.com/api/getMenuItemV1?localeCode=za';
                $client = new Client();

                $fields = [
                    'form_params' => [
                        'sfNuggetCount' => 37,
                        'storeUuid' => $storeData['uuid'],
                        'sectionUuid' => $uuid,
                        'menuItemUuid' => $itemUuid,
                        'subsectionUuid' => $subSectionUid,
                    ],
                    'headers' => [
                        'x-csrf-token' => 'x',
                        'x-uber-xps' => 'some host',
                    ]
                ];
                $response = $client->request('POST', $storeLink, $fields);

                echo $response->getStatusCode();

                $menuData = json_decode($response->getBody(), true)['data'];
                $customizations = !empty($menuData['customizationsList']) ? $menuData['customizationsList'] : [];

                $this->setCustomizations($customizations);
            }
        }
    }

    /**
     * @param $customizations
     */
    private function setCustomizations($customizations): void
    {
        $variantType = ProductType::TYPE_CUSTOMIZATION;

        foreach ($customizations as $customization) {
            $typeName = $customization['title'];

            echo ">>>>>>Inserting product type: {$typeName} \n";

            $attributes = [
                'name' => $typeName
            ];

            $values = [
                'name' => $typeName,
                'type' => $variantType,
                'is_active' => $variantType,
            ];

            $productType = ProductType::updateOrCreate($attributes, $values);

            $attributes = [
                'product_variant_id' => $this->productVariantId,
                'product_type_id' => $productType->id,
                'product_id' => $this->product->id,
            ];

            $values = [
                'price' => (float)@$customization['price'] / 100,
                'discount' => (float)@$customization['price'] / 100,
                'is_available' => !empty(@$customization['isSoldOut']),
                'is_active' => true,
                'product_variant_id' => $this->productVariantId,
                'product_type_id' => $productType->id,
                'product_id' => $this->product->id,
                'required_max' => $customization['maxPermitted'],
                'required_min' => $customization['minPermitted']
            ];

            $this->productVariantId = ProductVariant::updateOrCreate($attributes, $values)['id'];

            if (!empty($customization['childCustomizationList'])) {
                $this->setCustomizations($customization['childCustomizationList']);
            }

            if (!empty($customization['options'])) {
                $this->setCustomizations($customization['options']);
            }

            $this->productVariantId = null;
        }
    }

    /**
     * @param $productNode
     * @return array
     */
    private function getProductVariants($productNode): array
    {
        $filterSets = [];
        $content = $productNode->text();
        preg_match('/jsonData\ =\ (.*?)}}/s', $content, $match);

        if (!empty($match)) {
            $productVariants = json_decode($match[1] . '}}', true);

            $productTypes = ProductType::$types;
            if (!empty($productVariants)) {
                foreach ($productVariants as $filterSet) {
                    foreach ($productTypes as $productTypeId => $productType) {
                        $productType = strtolower($productType);
                        $productType = str_replace('color', 'colour', $productType);

                        if (!empty($filterSet['mrp_' . $productType])) {
                            $name = $filterSet['mrp_' . $productType];
                            $filterSets[] = [
                                'name' => trim($name),
                                'type' => $productTypes[$productTypeId]
                            ];
                        }
                    }
                }
            }
        }
        return $filterSets;
    }

    /**
     * @param $externalProductId
     * @param $product
     * @return array
     */
    private function setProductPhotos($externalProductId): void
    {
        $productPhotosUrl = "https://mrp.scene7.com/is/image/MRP/{$externalProductId}_GS_00?req=set,json,UTF-8&labelkey=label";
        $productImagesData = file_get_contents($productPhotosUrl);

        preg_match('/\[(.*?)\]/s', $productImagesData, $match);

        $productPhotos = [];
        if (!empty($match[0])) {
            $items = $match[0];
            $productPhotos = json_decode($items, true);
        }

        foreach ($productPhotos as $key => $photo) {
            $photo['large'] = "https://mrp.scene7.com/is/image/" . $photo['i']['n'] . "?fit=constrain,1&wid=900&hei=900&fmt=jpg&qlt=90&resMode=bisharp&op_usm=5,0.125,5,1";
            $photo['thumb'] = "https://mrp.scene7.com/is/image/" . $photo['i']['n'] . "?fit=fit,1&wid=300&hei=300&fmt=jpg&qlt=90&resMode=bisharp&op_usm=5,0.125,5,1";

            $productPhotoUrl = $photo['large'];
            $productThumbUrl = $photo['thumb'];

            // set the service photo
            $productPhoto = sha1($productPhotoUrl) . ".jpeg";
            $productThumb = sha1($productThumbUrl) . ".jpeg";

            if (!file_exists(public_path('storage/service/' . $productPhoto))) {
                echo ">>>>>> Product photo inserted : " . public_path('storage/service/' . $productPhoto) . "\n";
                Storage::disk('service')->put($productPhoto, file_get_contents($productPhotoUrl));
                Storage::disk('service')->put($productThumb, file_get_contents($productThumbUrl));
            } else {
                echo "<<<<<< Product photo skipped: " . public_path('storage/service/' . $productPhoto) . "\n";
            }

            if (empty($key)) {
                $values = [
                    'photo' => $productPhoto,
                    'thumbnail' => $productThumb
                ];

                Product::updateOrCreate(['id' => $this->product->id], $values);
            }

            $values = [
                'image' => $productPhoto,
                'thumb' => $productThumb,
                'product_id' => $this->product->id,
            ];

            ProductPhoto::updateOrCreate($values, $values);
        }
    }
}
