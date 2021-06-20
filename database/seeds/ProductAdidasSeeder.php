<?php

use App\ProductType;
use App\ProductVariant;
use Illuminate\Database\Seeder;
use App\Category;
use App\ProductPhoto;
use App\StoreCategory;
use App\Product;
use App\Store;

class ProductAdidasSeeder extends DatabaseSeeder
{
    protected $domain = "https://shop.adidas.co.za/";
    protected $storeId = null;

    protected $storeIds = [71];
    protected $categories = [];
    protected $level = 0;
    protected $product = null;
    protected $filterBrand = [];
    protected $parentCategory = null;
    protected $productItems = [];
    protected $perPage = 72;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        shuffle($this->storeIds);

        $storeIds[] = array_shift($this->storeIds);

        $this->stores = Store::whereIn('id', $storeIds)
            ->get();

        foreach ($this->stores as $store) {
            $this->storeId = $store->id;
            $this->domain = $store->url;

            echo ">>>>>> Fetching store > categories: " . $store->name . "\n";
            // This can only be run once
//             $this->setCategories();

            $this->storeCategories = StoreCategory::where('store_id', $this->storeId)
                ->with('category')
                ->orderBy('store_categories.updated_at', "ASC")
                ->get();

            // Get all the category products
            foreach ($this->storeCategories as $this->storeCategory) {
                $this->category = $this->storeCategory->category;

                $category = $this->storeCategory->category;
                echo ">>>>>>Category products: " . $store->name . ' >> ' . $category->name . "\n";
                $this->processCategory($this->storeCategory);

                $this->storeCategory->updated_at = date('Y-m-d H:i:s');
                $this->storeCategory->save();
            }

        }
        die("Well done.");
    }

    public function setCategories($categoryNodes = null, $level = 1, $parentStoreCategory = null)
    {
        if (empty($categoryNodes)) {
            $categoryNode = Goutte::request('GET', $this->domain);
            $categoryNodes = $categoryNode->filter(".nav-main--lvl{$level}__item");
        }

        $categoryNodes->each(function ($node) use ($level, $parentStoreCategory) {
            $categoryNode = $node->filter('a');

            if ($categoryNode->count() > 0) {
                $categoryName = $categoryNode->text();
                $categoryName = trim($categoryName);

                if (!empty($categoryName) && strpos($categoryName, ';') === false) {
                    $categoryLink = $categoryNode->attr('href');

                    if (strpos($categoryLink, $this->domain) === false) {
                        $categoryLink = $this->domain . $categoryLink;
                    }

                    $this->level = $level;

                    foreach (range(1, $level) as $arrows) {
                        echo ">>>>";
                    }
                    echo " {$categoryName}\n";

                    $parentStoreCategory = $this->setCategory($categoryName, $categoryLink, $parentStoreCategory);

                    $subLevel = $level + 1;
                    $categoryNodes = $node->filter(".nav-main--lvl{$subLevel}__item");

                    if (!empty($categoryNodes) && !empty($categoryName)) {
                        return $this->setCategories($categoryNodes, $subLevel, $parentStoreCategory);
                    }
                }
            }
        });
    }

    /**
     * @param $categoryName
     * @param $url
     * @return mixed
     */
    protected function setCategory($categoryName, $url, $parentStoreCategory = null)
    {
        $categoryDescription = 'Not set';

        $this->categories = [];

        /* Update or create this category */
        $attributes = [
            'name' => $categoryName,
        ];

        $values = [
            'name' => $categoryName,
            'order' => 1,
            'description' => $categoryDescription,
            'type' => Category::TYPE_CATALOG,
            'randomized_at' => date('Y-m-d'),
        ];

        $category = Category::updateOrCreate($attributes, $values);
        $this->categories[] = $category;

        $attributes = [
            'store_id' => $this->storeId,
            'category_id' => $category->id,
            'url' => $url,
            'level' => $this->level,
        ];

        /* Add in the store category link */
        $values = [
            'store_id' => $this->storeId,
            'parent_id' => $parentStoreCategory->id ?? null,
            'category_id' => $category->id,
            'url' => $url,
            'level' => $this->level,
            'has_products' => empty($this->level),
            'has_categories' => empty($this->level),
            'randomized_at' => date('Y-m-d'),
        ];

//        echo ">>>>>Updating lookup category :" . $category->name . "\n";

        return $this->storeCategory = StoreCategory::updateOrCreate($attributes, $values);
    }

    /**
     * @param $storeCategory
     * @param int $page
     */
    public function processCategory($storeCategory)
    {
        try {
            $category = $storeCategory->category;

            echo "Processing category >>>>>> : " . $category->name . "\n";

            // fetch the category home page
            $this->fetchCategoryProducts($storeCategory);

            // set the search/lookup data
            $this->setSearchLookup($storeCategory);

        } catch (Exception $ex) {
            dump($ex);
        }
    }

    /**
     * @param $storeCategory
     * @param $limit
     * @param $totalPages
     * @return void
     */
    private function fetchCategoryProducts($storeCategory, $page = 1, $totalPages = 1): void
    {
        $categoryUrl = $storeCategory->url;
        if(strpos($storeCategory->url, 'shop.adidas') === false){
            $categoryUrl = $this->domain . $categoryUrl;
        }

        $categoryUrl .= "?page={$page}";
        $categoryNode = Goutte::request('GET', $categoryUrl);

        if($page == 1){
            $nextPageNode = $categoryNode->filter('.current-path--total')->eq(0);

            if($nextPageNode->count() > 0){
                $productPageText = $nextPageNode->text();

                $productPageText = str_replace(" ", "", $productPageText);
                $productPageText = str_replace(" ", "", $productPageText);
                $productPageText = str_replace("(", "", $productPageText);
                $productPageText = str_replace(")", "", $productPageText);
                $productPageText = str_replace("products", "", trim($productPageText));

                if(!empty($productPageText) && is_numeric($productPageText)){
                    $totalProducts = trim($productPageText);
                    $totalPages = ceil(($totalProducts/$this->perPage));

                    echo "Total products >>>>>>>>> {$totalProducts}\n";
                }
            }
        }

        echo "Fetching category url >>>>>>>>> {$categoryUrl}\n";
        echo "Total pages >>>>>>>>> {$totalPages}\n";

        $productItems = [];
        $categoryNode->filter('.catalog-product__padding')->each(function ($node) use (&$productItems) {
            $nameNode = $node->filter('.catalog--product-name');
            if ($nameNode->count() > 0) {
                $productName = $nameNode->text();
            }

            $urlNode = $node->filter('a');
            if ($urlNode->count() > 0) {
                $productUrl = $urlNode->attr('href');
            }

            $this->product = App\Product::where('external_url', $productUrl)->first();

            if(!empty($productUrl) && empty($this->product->id)){
                $productPrice = null;
                $priceNode = $node->filter('.catalog-product--price');

                if ($priceNode->count() > 0) {
                    $productPrice = $priceNode->text();
                    $productPrice = str_replace('R', '', trim($productPrice));
                }

                if (strpos($productUrl, $this->domain) === false) {
                    $productUrl = $this->domain . $productUrl;
                }

                $productItems[] = [
                    'name' => trim($productName),
                    'external_url' => $productUrl,
                    'price' => $this->setPrice($productPrice),
                    'discount' => $this->setPrice($productPrice),
                ];
            }
            else{
                $this->setProductCategory();
            }
        });

        if (!empty($productItems)) {
            $this->setProducts($productItems, $storeCategory);
        }

        if($totalPages > $page){
            $this->fetchCategoryProducts($storeCategory,  $page + 1, $totalPages);
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
            $productNode = Goutte::request('GET', $productItem['external_url']);

            $productItem['summary'] = '';
            $summaryNode = $productNode->filter('meta[name=description]');
            if ($summaryNode->count() > 0) {
                $productItem['summary'] = $summaryNode->attr('content');
            }

            $productItem['description'] = $productNode->filter('.product-spec-review')->text();

            $this->setProduct($productItem, $storeCategory);

            $this->getProductVariants($productNode);

            $this->setProductPhotos();
        }
    }

    /**
     * @param $productNode
     */
    private function getProductVariants($productNode): void
    {
        $filterSets = [];

        $productNode->filter('.sizes .prd-option-item')->each(function ($node) use(&$filterSets) {
            $name = $node->text();

            $filterSets[] = [
                'name' => trim($name),
                'type' => ProductType::TYPE_SIZE
            ];
        });

        if (!empty($filterSets)) {
            $this->setProductTypes($filterSets);
        }
    }

    /**
     * @param $filterSets
     */
    protected function setProductTypes($filterSets): void
    {
        $productTypes = ProductType::$types;

        foreach ($filterSets as $filterItem) {
            $name = $filterItem['name'];
            echo ">>>>>>Inserting product type: {$name} with type: {$name} \n";

            $attributes = [
                'name' => $name
            ];

            $values = $filterItem;

            $productType = ProductType::updateOrCreate($attributes, $values);
            echo ">>>>>>Inserting {$productType->name} product variant: {$name} \n";

            $this->setProductVariant($filterItem, $productType);
        }

        $this->filterBrand = [];
    }

    /**
     * @param $externalProductId
     * @param $product
     * @return array
     */
    private function setProductPhotos(): void
    {
        $productUrl = $this->product->external_url;
        $productNode = Goutte::request('GET', $productUrl);

        $key = 0;
        $productNode->filter('#moreImagesList .item')->each(function($node) use (&$key){
            $productThumbUrl = $node->attr('data-image');
            $productPhotoUrl = $node->attr('data-zoom-image');

            // set the product photo
            $productPhoto = sha1($productPhotoUrl) . ".jpeg";
            $productThumb = sha1($productThumbUrl) . ".jpeg";

            if (!file_exists(public_path('storage/product/' . $productPhoto))) {
                Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));
                Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));
                echo "Product photo inserted: " . public_path('storage/product/' . $productPhoto) . "\n";
            } else {
                echo "Product photo skipped: " . public_path('storage/product/' . $productPhoto) . "\n";
            }

            if (empty($key)) {
                $values = [
                    'photo' => $productPhoto,
                    'thumbnail' => $productThumb
                ];

                Product::updateOrCreate(['id' => $this->product->id], $values);
            }

            $key++;

            $values = [
                'image' => $productPhoto,
                'thumb' => $productThumb,
                'product_id' => $this->product->id,
            ];

            ProductPhoto::updateOrCreate($values, $values);
        });
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

    protected function testResponse($productLink)
    {
        $productNode = Goutte::request('GET', $productLink)
            ->filter('meta[itemprop=description]')->eq(0);

        $productNode = Goutte::request('GET', $productLink);

        $description = $this->getProductDescription($productNode->html());

        dd($description);
    }
}
