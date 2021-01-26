<?php

use App\ProductType;
use App\ProductVariant;
use Illuminate\Database\Seeder;
use App\Category;
use App\ProductPhoto;
use App\StoreCategory;
use App\Product;
use App\Store;

class ProductMrSeeder extends DatabaseSeeder
{
    protected $domain = "https://www.mrp.com/";
    protected $storeId = null;

    protected $storeIds = [7, 8, 9];
    protected $categories = [];
    protected $level = 0;
    protected $filterBrand = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->testResponse('https://www.home.co.za/pdp/duvet-cover-egyptian-cotton-800-thread-count/_/A-157506AAJM8');
//        die('done');

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
                ->orderBy('store_categories.updated_at', "ASC")
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
        foreach ($this->storeCategories as $key => $storeCategory) {
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
        $urlParts = explode('/', $storeCategory->url);

        $urlParts = array_slice($urlParts, 4, count($urlParts) - 5);

        $level = count($urlParts) + 1;
        $slug = null;

        if (!empty($urlParts)) {
            $slug = array_pop($urlParts);
        }

        if (!empty($slug)) {
            $parentStoreCategory = StoreCategory::where('url', 'like', "%/{$slug}")
                ->with('category')
                ->where('store_id', $this->storeId)
                ->first();
        }

        $categoryAttributes = [
            'id' => $storeCategory->id
        ];

        if (!empty($parentStoreCategory)) {
            $this->parentStoreCategory = $parentStoreCategory;

            $categoryValues = [
                'level' => $level,
                'parent_id' => $this->parentStoreCategory->id
            ];

            echo "Updated parent {$this->parentStoreCategory->category->name} category for {$storeCategory->slug} >>>>> \n";
        } else {
            $categoryValues = [
                'level' => $level,
                'parent_id' => null
            ];
        }
        StoreCategory::updateOrCreate($categoryAttributes, $categoryValues);
    }

    public function setCategories($categoryLink)
    {
        $category = null;
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

            $this->setCategory($categoryName, $categoryLink);
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
            $productItems = $this->fetchCategoryProducts($storeCategory);

            if (!empty($productItems)) {
                $this->setProducts($productItems, $storeCategory);
            }

            // set the search/lookup data
            $this->setSearchLookup($storeCategory);

        } catch (Exception $ex) {
            dump($ex);
        }
    }

    /**
     * @param $categoryName
     * @param $url
     * @return mixed
     */
    private function setCategory($categoryName, $url)
    {
        $categoryDescription = 'Not set';

        $this->level = -1;
        $this->categories = [];

        /* Update or create this category */
        $attributes = $values = [
            'name' => $categoryName,
        ];

        $values = [
            'name' => $categoryName,
            'order' => 1,
            'description' => $categoryDescription,
            'type' => Category::TYPE_CATALOG
        ];

        $category = \App\Category::updateOrCreate($attributes, $values);
        $this->categories[] = $category->id;

        /* Add in the store category link */
        $values = [
            'store_id' => $this->storeId,
            'category_id' => $category->id,
            'url' => $url,
        ];

        StoreCategory::updateOrCreate($values, $values);
        return $category;
    }

    protected $parentCategory = null;

    /**
     * @param $externalProductId
     * @param $product
     * @return array
     */
    private function setProductPhotos($externalProductId, $product): void
    {
        $productPhotosUrl = "https://mrp.scene7.com/is/image/MRP/01_{$externalProductId}_GS_00?req=set,json,UTF-8&labelkey=label";
        $productImagesData = file_get_contents($productPhotosUrl);

        preg_match('/\[(.*?)\]/s', $productImagesData, $match);

        $productPhotos = [];
        if (!empty($match[0])) {
            $items = $match[0];
            $productPhotos = json_decode($items, true);
        }

//        dd([$match, $productPhotosUrl, $productPhotos]);

        foreach ($productPhotos as $key => $photo) {

            $photo['large'] = "https://mrp.scene7.com/is/image/" . $photo['i']['n'] . "?fit=constrain,1&wid=900&hei=900&fmt=jpg&qlt=90&resMode=bisharp&op_usm=5,0.125,5,1";
            $photo['thumb'] = "https://mrp.scene7.com/is/image/" . $photo['i']['n'] . "?fit=fit,1&wid=300&hei=300&fmt=jpg&qlt=90&resMode=bisharp&op_usm=5,0.125,5,1";

            $productPhotoUrl = $photo['large'];
            $productThumbUrl = $photo['thumb'];

            // set the product photo
            $productPhoto = sha1($productPhotoUrl) . ".jpeg";
            $productThumb = sha1($productThumbUrl) . ".jpeg";

            if (!file_exists(public_path('storage/product/' . $productPhoto))) {
                Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));
                Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));
            } else {
                echo "Product photo skipped: " . public_path('storage/product/' . $productPhoto) . "\n";
            }

            if (empty($key)) {
                $values = [
                    'photo' => $productPhoto,
                    'thumbnail' => $productThumb
                ];

                Product::updateOrCreate(['id' => $product->id], $values);
            }

            $values = [
                'image' => $productPhoto,
                'thumb' => $productThumb,
                'product_id' => $product->id,
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
            $product = App\Product::where('external_url', $productItem['external_url'])->first();

            $productNode = Goutte::request('GET', $productItem['external_url']);

            $productItem['summary'] = '';
            $summaryNode = $productNode->filter('meta[name=description]');
            if ($summaryNode->count() > 0) {
                $productItem['summary'] = $summaryNode->attr('content');
            }

            $productItem['description'] = '';
            $productNode->filter('#accordion-product-tabs .panel')->each(function ($node) use (&$productItem) {
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

            if (empty($product->id)) {
                $product = $this->setProduct($productItem, $storeCategory);
            }

            $filterSets = $this->getProductVariants($productNode);
            if (!empty($filterSets)) {
                $this->setProductTypes($filterSets, $product);
            }

            $urlParts = explode("_", $product->external_url);

            if (!empty($urlParts)) {
                $externalProductId = $urlParts[count($urlParts) - 1];

                $this->setProductPhotos($externalProductId, $product);
            }
        }
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
     * @return array
     */
    private function fetchCategoryProducts($storeCategory, $limit = 450): array
    {
        $categoryUrl = $storeCategory->url . '?limit=' . $limit;
        $categoryNode = Goutte::request('GET', $categoryUrl);

        $productItems = [];
        $categoryNode->filter('.products-grid li.item')->each(function ($node) use (&$productItems) {

            $nameNode = $node->filter('.product-name');
            if ($nameNode->count() > 0) {
                $productName = $nameNode->text();
            }

            $urlNode = $node->filter('a.product-image');
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

        return $productItems;
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
