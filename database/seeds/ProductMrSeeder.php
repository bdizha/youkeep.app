<?php

use App\ProductType;
use App\ProductVariant;
use Illuminate\Database\Seeder;
use App\Category;
use App\ProductPhoto;
use App\StoreCategory;
use App\Product;
use App\Store;

use GuzzleHttp\Client;

class ProductMrSeeder extends DatabaseSeeder
{
    protected $domain = "https://www.mrp.com/";
    protected $storeId = null;

    protected $storeIds = [7, 8, 9];
    protected $categories = [];
    protected $level = -1;
    protected $filterBrand = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storeIds = [];
        shuffle($this->storeIds);

        $storeIds[] = array_shift($this->storeIds);

        $this->stores = Store::whereIn('id', $storeIds)
            ->get();

        foreach ($this->stores as $store) {
            $this->storeId = $store->id;
            $this->domain = $store->url;

            echo ">>>>>> Fetching store > categories: ". $store->name . "\n";
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

    protected function setParentCategories()
    {
        foreach ($this->storeCategories as $storeCategory) {
            $this->parentStoreCategory = null;

            $this->setParentStoreCategory($storeCategory);
            echo 'Linking category ::::' . $storeCategory->url . "\n<<===================================\n";
        }
    }

    /**
     * @param $category
     * @return void
     */
    protected function setParentStoreCategory($storeCategory)
    {
        $this->parentStoreCategory = null;

        $categoryUrl = str_replace("en_za/", "", $storeCategory->url);
        $categoryUrl = str_replace("shop/", "", $categoryUrl);
        $categoryUrl = str_replace("com//", "com/", $categoryUrl);

        $urlParts = explode('/', $categoryUrl);

        $urlParts = array_slice($urlParts, 3);
        $level = count($urlParts);

        array_pop($urlParts);

        if (!empty($urlParts)) {
            $slug = null;

            if (!empty($urlParts)) {
                $slug = array_pop($urlParts);
            }

            if (!empty($slug)) {
                $parentStoreCategory = StoreCategory::where('url', 'like', "%/{$slug}")
                    ->with('category')
                    ->where('store_id', $this->storeId)
                    ->where('id', '!=', $storeCategory->id)
                    ->first();

                $categoryAttributes = [
                    'id' => $storeCategory->id
                ];

                $categoryValues = [
                    'level' => $level,
                    'parent_id' => $parentStoreCategory->id ?? null
                ];
            }
        }
        else{
            $categoryAttributes = [
                'id' => $storeCategory->id
            ];

            $categoryValues = [
                'level' => 1,
                'parent_id' => null
            ];
        }

        echo "Updated store category {$storeCategory->category->name} :: {$storeCategory->slug} >>>>> \n";
        StoreCategory::updateOrCreate($categoryAttributes, $categoryValues);
    }

    public function setCategories($categoryLink)
    {
        $categoryNode = Goutte::request('GET', $categoryLink);
        $categoryNodes = $categoryNode->filter('.menu-columns li a');

        $categoryNodes->each(function ($node) {
            if (strpos($node->attr('href'), $this->domain) === false) {
                $categoryLink = $this->domain . $node->attr('href');
            } else {
                $categoryLink = $node->attr('href');
            }

            $categoryName = $node->text();
            $categoryName = trim($categoryName);

            echo "Category >>>> {$categoryName}\n";

            if(strlen($categoryName) > 2){
                $this->setCategory($categoryName, $categoryLink);
            }
        });
    }

    /**
     * @param $storeCategory
     * @param int $page
     */
    public function processCategory($storeCategory)
    {
        try {
            $category = $storeCategory->category;

            echo ">>>>>> Processing category: " . $category->name . "\n";

            // fetch the category home page
            $this->fetchCategoryProducts($storeCategory);

            // set the search/lookup data
            $this->setSearchLookup($storeCategory);

        } catch (Exception $ex) {
            dump($ex);
        }
    }

    protected $parentCategory = null;

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

    /**
     * @param $productItems
     * @param $category
     * @param $productType
     */
    private function setProducts($productItems, $storeCategory): void
    {
        foreach ($productItems as $productItem) {
            $this->product = App\Product::where('external_url', $productItem['external_url'])->first();

            $productNode = Goutte::request('GET', $productItem['external_url']);

            $productItem['summary'] = '';
            $summaryNode = $productNode->filter('meta[name=description]');
            if ($summaryNode->count() > 0) {
                $productItem['summary'] = $summaryNode->attr('content');
            }

            $productItem['description'] = '';
            $productNode->filter('#accordion-service-tabs .panel')->each(function ($node) use (&$productItem) {
                $description = null;

                $titleNode = $node->filter('.panel-title a');
                if ($titleNode->count() > 0) {
                    $description .= "<h4>" . trim($titleNode->text()) . "</h4>";
                }

                $contentNode = $node->filter('.panel-body');
                if ($contentNode->count() > 0) {

                    $innerNode = $contentNode->filter('.widget-static-block');
                    if ($innerNode->count() > 0) {
                        $description .= $innerNode->eq(0)->html();
                    } else {
                        $description .= $contentNode->html();
                    }
                }

                $productItem['description'] .= $description;
            });

            $this->setProduct($productItem, $storeCategory);

            $filterSets = $this->getProductVariants($productNode);

            if (!empty($filterSets)) {
                $this->setProductTypes($filterSets);
            }

            $urlParts = explode("sku=", $this->product->external_url);

            if (!empty($urlParts)) {
                $externalProductId = $urlParts[count($urlParts) - 1];

                $this->setProductPhotos($externalProductId);
            }
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

            $productType = \App\ProductType::updateOrCreate($attributes, $values);
            echo ">>>>>>Inserting {$productType->name} product variant: {$name} \n";

            $this->setProductVariant($filterItem, $productType);
        }

        $this->filterBrand = [];
    }

    protected $productItems = [];

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
     * @param $storeCategory
     * @param $limit
     * @return void
     */
    private function fetchCategoryProducts($storeCategory, $limit = 450): void
    {
        $categoryUrl = $storeCategory->url . '?limit=' . $limit;
        $categoryNode = Goutte::request('GET', $categoryUrl);

        $storeCategory = $this->fetchCategoryBanners($categoryNode, $storeCategory);

        $productItems = [];
        $categoryNode->filter('.products-grid li.item')->each(function ($node) use (&$productItems) {
            $nameNode = $node->filter('.service-name');
            if ($nameNode->count() > 0) {
                $productName = $nameNode->text();
            }

            $urlNode = $node->filter('a.service-image');
            if ($urlNode->count() > 0) {
                $productUrl = $urlNode->attr('href');
            }

            $productPrice = null;
            $priceNode = $node->filter('.price');
            if ($priceNode->count() > 0) {
                $productPrice = $priceNode->text();
                $productPrice = str_replace('R', '', trim($productPrice));
            }

            $brandNode = $node->filter('.brand-text');
            $this->filterBrand = [];

            if ($brandNode->count() > 0) {
                $this->filterBrand = [
                    'name' => $brandNode->eq(0)->text(),
                    'type' => ProductType::$types[ProductType::TYPE_BRAND]
                ];
            }

            $productItems[] = [
                'name' => trim($productName),
                'external_url' => $productUrl,
                'price' => $this->setPrice($productPrice),
                'discount' => $this->setPrice($productPrice),
            ];
        });

        if (!empty($productItems)) {
            $this->setProducts($productItems, $storeCategory);
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

    /**
     * @param $categoryNode
     * @param $storeCategory
     * @return mixed
     */
    private function fetchCategoryBanners($categoryNode, $storeCategory)
    {
        if ($categoryNode->filter('.cat-banner img')->count() > 0) {
            $photo = $categoryNode->filter('.cat-banner img.hidden-xs')->eq(0)->attr('src');
            $this->setCategoryBanner($storeCategory, $photo);
        }

        $categoryNode->filter('.widget-static-block a')->each(function ($node) use (&$storeCategory) {
            $externalUrl = $node->attr('href');
            $externalUrl = trim($externalUrl, "/");

            $photoNode = $node->filter('img');
            if ($photoNode->count() > 0) {
                $photo = $photoNode->attr('src');

                if (!empty($externalUrl)) {
                    $_storeCategories = StoreCategory::where('url', $externalUrl)
                        ->get();

                    foreach ($_storeCategories as $_storeCategory) {
                        $this->setCategoryBanner($_storeCategory, $photo);
                    }
                }
            }
        });

        $categoryNode->filter('.image-spot a')->each(function ($node) use (&$storeCategory) {
            $externalUrl = $node->attr('href');
            $externalUrl = trim($externalUrl, "/");

            $photoNode = $node->filter('.desktop-bg');
            if ($photoNode->count() > 0) {
                $photoStyle = $photoNode->attr('style');

                preg_match('/\((.*?)\)/s', $photoStyle, $match);

                if (!empty($match[1])) {
                    $photo = $match[1];
                    echo $externalUrl . "\n";
                    $this->setCategoryBanner($storeCategory, $photo);
                }

                if (!empty($externalUrl)) {
                    $_storeCategories = StoreCategory::where('url', $externalUrl)
                        ->get();

                    foreach ($_storeCategories as $_storeCategory) {
                        $this->setCategoryBanner($_storeCategory, $photo);
                    }
                }
            }
        });
        return $storeCategory;
    }
}
