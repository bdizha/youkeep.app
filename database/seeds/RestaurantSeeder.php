<?php

use App\Category;
use App\Product;
use App\ProductPhoto;
use App\ProductType;
use App\Store;
use App\StoreCategory;
use App\StoreServe;

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

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storeIds = [];

        $this->getFetchStores();

        $this->stores = Store::whereIn('id', $storeIds)
            ->get();

        foreach ($this->stores as $store) {
            $this->storeId = $store->id;
            $this->domain = $store->url;

            echo ">>>>>> Fetching store > categories: " . $store->name . "\n";
            $this->setCategories($store->url);

            $this->storeCategories = StoreCategory::where('store_id', $this->storeId)
                ->with('category')
                ->orderBy('level', 'ASC')
                ->orderBy('store_categories.updated_at', "ASC")
//                ->where('id', 18844)
                ->limit(1000)
                ->get();

            echo ">>>>>> Setting category to parent relations categories: " . $store->name . "\n";
            $this->setParentCategories();

            // Get all the category products
            foreach ($this->storeCategories as $storeCategory) {
                $category = $storeCategory->category;
                echo ">>>>>> Fetching store > categories > products: " . $store->name . ' >> ' . $category->name . "\n";
                $this->processCategory($storeCategory);

                $storeCategory->updated_at = date('Y-m-d H:i:s');
                $storeCategory->save();
            }

        }
        die("Well done.");
    }

    public function getFetchStores()
    {
        $link = url("/api/home/categories");

        $crawler = Goutte::request('GET', $link);
        $locationNodes = $crawler->filter('.ev');

        $locationNodes->each(function ($node) {
            echo __LINE__ . " <> \n";

            $locationLink = $this->domain . $node->filter('a')->attr('href');

            $crawler = Goutte::request('GET', $locationLink);
            $categoryNodes = $crawler->filter('#main-content section');

            $categoryNodes->each(function ($node) {

                $categoryName = $node->filter('.dc')->count() > 0 ? $node->filter('.dc')->text() : null;
                $categoryDescription = $node->filter('.by')->count() > 0 ? $node->filter('.by')->text() : null;

                $storeNodes = $node->filter('.af a');

                $storeNodes->each(function ($node) {
                    if ($node->filter('a')->count() > 0) {
                        $storeLink = $this->domain . $node->filter('a')->attr('href');

                        $crawler = Goutte::request('GET', $storeLink);

                        $storeNode = $crawler->filter('body');

                        $storeHtml = $storeNode->html();

                        $storeParts = explode('</script>', $storeHtml);
                        $storeParts2 = explode('<script type="application/json" id="__REDUX_STATE__">', $storeHtml);

                        if(!empty($storeParts2[1])){
                            $storeParts2 =  explode('<script type="application/json" id="__XPS__">', $storeParts2[1]);

                            if (count($storeParts2) > 0) {
                                $storeJson2 = str_replace('</script>', '', $storeParts2[0]);
                                $storeJson2 = trim($storeJson2);

                                $storeJson2 = $this->unicode_decode($storeJson2);
                                $storeJson2 = str_replace('%5C"', "'", $storeJson2);

                                $storeData2 = json_decode($storeJson2, true);


                                $decode2 = $storeData2['stores']['4ff5989a-90e0-4ce9-a14b-c65080545728']['data']['metaJson'];

                                dd(json_decode($decode2));
                            }
                        }


                        if (count($storeParts) > 0) {
                            $storeJson = str_replace('<script type="application/ld+json">', '', $storeParts[0]);


                            $storeData = json_decode($storeJson, true);
                            $store = [];
                            $store['name'] = $storeData['name'];
                            $store['phone'] = $storeData['telephone'];
                            $store['rating'] = @$storeData['aggregateRating']['ratingValue'];
                            $tradingData = $store['openingHoursSpecification'];

                            $storePhotoData = $storeData['image'];

                            if (!empty($tradingData[0])) {
                                $tradingData = array_shift($tradingData);

                                $tradingHours = [
                                    'days' => @$tradingData['dayOfWeek'],
                                    'opens' => @$tradingData['opens'],
                                    'closes' => @$tradingData['closes']
                                ];

                                $store['trading_hours'] = serialize($tradingHours);

                            }

                            $addressData = $store['address'];
                            $geoData = $store['geo'];

                            $addressData = [
                                'suburb' => null,
                                'address_line' => $addressData['streetAddress'],
                                'address_line_2' => $addressData[''],
                                'postal_code' => $addressData['postalCode'],
                                'city' => $addressData['addressLocality'],
                                'province' => $addressData['addressRegion'],
                                'country_id' => 206,
                                'latitude' => $geoData['latitude'],
                                'longitude' => $geoData['longitude'],
                            ];

                            $servesData = $storeData['servesCuisine'];
                            $menuData = @$storeData['hasMenu']['hasMenuSection'];

                            foreach ($menuData as $section) {
                                $categoryName = $section['name'];

                                $this->storeId = $store->id;
                                $this->level = 1;

                                $this->setCategory($categoryName);

                                foreach ($section['fdafda'] as $productData) {
                                    $productItem = [
                                        'name' => $productData['name'],
                                        'external_url' => null,
                                        'price' => $productData['price'],
                                        'discount' => $productData['price'],
                                        'summary' => $productData['description'],
                                        'description' => $productData['description'],
                                    ];

                                    $this->setProduct($productItem, $this->storeCategory);
                                }
                            }

                            // set the serves cuisine
                            foreach ($servesData as $serveName) {
                                $values = [
                                    'name' => $serveName
                                ];

                                $serve = Serve::updateOrCreate($values, $values);

                                $values = [
                                    'store_id' => $store->id,
                                    'serve_id' => $serve->id,
                                ];

                                StoreServe::updateOrCreate($values, $values);
                            }

                            dd($store);
                        }
                    }
                });
            });
        });
    }

    function replace_unicode_escape_sequence($match) {
        return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
    }

    function unicode_decode($str) {
        return preg_replace_callback('/\\\\u([0-9a-f]{4})/i',  function ($match) {
            return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
        }, $str);
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

            $productType = \App\ProductType::updateOrCreate($attributes, $values);
            echo ">>>>>>Inserting {$productType->name} service variant: {$name} \n";

            $this->setProductVariant($filterItem, $productType);
        }

        $this->filterBrand = [];
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

    protected function testResponse($productLink)
    {
        $productNode = Goutte::request('GET', $productLink)
            ->filter('meta[itemprop=description]')->eq(0);

        $productNode = Goutte::request('GET', $productLink);

        $description = $this->getProductDescription($productNode->html());

        dd($description);
    }
}
