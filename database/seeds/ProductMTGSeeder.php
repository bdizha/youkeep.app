<?php

use App\ProductType;
use Illuminate\Database\Seeder;
use App\Category;
use App\Store;
use App\Product;
use Illuminate\Support\Str;

class ProductMTGSeeder extends DatabaseSeeder
{
    protected $domain = "https://www.archivestore.co.za";
    protected $storeId = null;

    protected $storeIds = [69, 68, 67, 66, 65, 61, 34, 50, 64, 63, 62, 29];
    protected $categories = [];
    protected $level = 0;

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

            echo ">>>>>> Fetching store > categories: " . $store->id . "\n";
            $this->getCategories($store->url);

            $this->storeCategories = \App\StoreCategory::where('store_id', $this->storeId)
                ->with('category')
                ->orderBy('store_categories.updated_at', "ASC")
                ->get();

            echo ">>>>>> Decoding store > categories: " . $store->name . "\n";
            $this->decodeCategories($this->storeId);

            // Get all the category products
            foreach ($this->storeCategories as $storeCategory) {
                $category = $storeCategory->category;
                echo ">>>>>> Fetching store > categories > products: " . $category->name . ' >> ' . $store->name . "\n";
                $this->processCategory($storeCategory);

                $storeCategory->updated_at = date('Y-m-d H:i:s');
                $storeCategory->save();
            }

        }
        die("Well done.");
    }

    public function getCategories($categoryLink)
    {
        $category = null;
        $categoryNode = Goutte::request('GET', $categoryLink);
        $categoryNodes = $categoryNode->filter('.nav__list li a');

        $categoryNodes->each(function ($node) {
            if (strpos($node->attr('href'), $this->domain) === false) {
                $categoryLink = $this->domain . $node->attr('href');
            } else {
                $categoryLink = $node->attr('href');
            }
            $categoryName = $node->text();

            $categoryName = trim($categoryName);

            $linkParts = explode(';jsessionid', $categoryLink);

            if (!empty($linkParts[0])) {
                $categoryLink = $linkParts[0];

                echo "Category: " . $categoryName . "\n";
                echo "Category link: " . $categoryLink . "\n";

                if (strpos($categoryLink, 'plp') !== false ||
                    strpos($categoryLink, 'rclp') !== false) {
                    $this->setCategory($categoryName, $categoryLink);
                }
            }
        });
    }

    /**
     * @param $storeCategory
     * @param int $page
     */
    public function processCategory($storeCategory, $page = 1)
    {
        try {
            // find the category filter to use
            $filterItem = $this->setCategoryFilterItem($storeCategory);

            if (empty($filterItem)) {
                return;
            }

            // fetch the category home page
            list($totalPages, $productItems) = $this->setCategoryPages($filterItem, $page);

            if (!empty($productItems)) {
                $this->setProducts($productItems, $storeCategory);
            }

            if ($page < $totalPages) {
                ++$page;

                $this->processCategory($storeCategory, $page);
            }

            // set the search/lookup data
            $this->setSearchLookup($storeCategory);

        } catch (Exception $ex) {
            dump($ex);
        }
    }

    protected function getProductDescription($content)
    {
        preg_match('/<div class="tabs__wrap">(.*?)<\/div>/s', $content, $match);

        return $match;
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

        \App\StoreCategory::updateOrCreate($values, $values);
        return $category;
    }

    protected $parentCategory = null;

    /**
     * @param $productData
     * @return array
     */
    private function getProductVariants($productData): array
    {
        $filterSets = [];

        $productTypes = ProductType::$types;
        if (!empty($productData)) {

            foreach ($productTypes as $productType) {
                $productTypeKey = strtolower($productType);
                $productTypeKey = str_replace('colour', 'color', $productTypeKey);

                $productTypeKey = Str::plural($productTypeKey);

                if (empty($productData[$productTypeKey])) {
//                    echo __LINE__ . " Skipping product variant: {$productTypeKey} \n";
                    continue;
                }

                foreach ($productData[$productTypeKey] as $filterSet) {
                    $name = ucwords(strtolower($filterSet['name']));
                    $name = trim(str_replace("  ", "", $name));
                    $name = ucwords($name);

                    $filterSets[] = [
                        'name' => $name,
                        'type' => $productType,
                        'price' => !empty($filterSet['price']) ? $filterSet['price'] : null,
                        'discount' => !empty($filterSet['oldPricediscount']) ? $filterSet['oldPrice'] : null,
                    ];
                }
            }
        }

        if (!empty($productData['brand'])) {
            $filterSets[] = [
                'name' => $productData['brand'],
                'type' => $productTypes[ProductType::TYPE_BRAND]
            ];
        }

        return $filterSets;
    }

    /**
     * @param $productData
     * @param $product
     * @return array
     */
    private function setProductPhotos($productData, $product): void
    {
        foreach ($productData['images'] as $key => $photo) {
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

            \App\ProductPhoto::updateOrCreate($values, $values);
        }
    }

    /**
     * @param $productItems
     * @param $storeCategory
     * @param $productType
     */
    private function setProducts($productItems, $storeCategory): void
    {
        foreach ($productItems as $productItem) {
            $productLink = strpos($productItem['pdpLinkUrl'], $this->domain) === false ?
                $this->domain . $productItem['pdpLinkUrl'] : $productItem['pdpLinkUrl'];

            $_product = App\Product::where('external_url', $productLink)->first();

            $productName = $productItem['name'];
            $productSummary = '';

            $productPrice = $productItem['latestPriceRange'];

            $priceParts = explode('-', $productPrice);

            if (!empty($priceParts)) {
                $productPrice = $priceParts[count($priceParts) - 1];
            }

            $productPrice = str_replace('R ', '', $productPrice);
            $productPrice = str_replace(',', '', $productPrice);

            $productPrice = trim($productPrice);

            $productNode = Goutte::request('GET', $productLink)
                ->filter('meta[itemprop=description]')->eq(0);

            $description = 'Not set';
            if ($productNode->count() > 0) {
                $productSummary = $productNode->attr('content');
            }

            $productNode = Goutte::request('GET', $productLink);
            $this->getProductDescription($productNode->text(), $description);

            $productNode = Goutte::request('GET', $productLink)
                ->filter('#product-static-data');

            $attributes = [
                'name' => $productName,
                'price' => number_format((float)$productPrice, 2, '.', ''),
                'discount' => number_format((float)$productPrice, 2, '.', ''),
                'summary' => $productSummary,
                'external_url' => $productLink,
                'description' => $description
            ];

            $productData = json_decode($productNode->text(), true);

            if (empty($_product->id)) {
                // set the thumb
                $productThumbUrl = $productItem['defaultImages'][0];
                $productThumb = sha1($productThumbUrl) . ".jpeg";

                if (!file_exists(public_path('storage/product/' . $productThumb))) {
                    Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));
                } else {
                    echo "Product photo skipped: " . public_path('storage/product/' . $productThumb) . "\n";
                }

                // set the main photo
                $productPhotoUrl = !empty($productData['images'][0]['large']) ? $productData['images'][0]['large'] : $productThumbUrl;

                $productPhoto = sha1($productPhotoUrl) . ".jpeg";
                Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));

                $attributes['photo'] = $productPhoto;
                $attributes['thumbnail'] = $productThumb;
            } else {
                $_product->updateAncestryIds($storeCategory);
            }

            $product = $this->setProduct($attributes, $storeCategory);
            $filterSets = $this->getProductVariants($productData);

            if (!empty($filterSets)) {
                $this->setProductTypes($filterSets, $product);
            }

            if (!empty($productData['images'])) {
                $this->setProductPhotos($productData, $product);
            }
        }
    }

    protected $productItems = [];

    private $filterSets = [];

    /**
     * @param $filterItem
     * @param int $page
     * @return array
     */
    private function setCategoryPages($filterItem, int $page): array
    {
        $categoryUrl = $this->domain . '/search/ajaxResultsList.jsp';
        $categoryFilterUrl = $categoryUrl .
            "?N=" . $filterItem .
            "&Nrpp=15" .
            "&No=" . (($page - 1) * 15) .
            '&page=' . $page;

        $categoryNode = Goutte::request('GET', $categoryFilterUrl);
        $categoryData = json_decode($categoryNode->text(), true);

        $totalPages = 0;
        $productItems = [];
        if (!empty($categoryData['data']['products'])) {
            $totalPages = $categoryData['data']['totalPages'];
            $productItems = $categoryData['data']['products'];
        }

        echo "Total pages: {$totalPages} >>> for {$categoryFilterUrl}\n";
        return array($totalPages, $productItems);
    }

    /**
     * @param $storeCategory
     * @return mixed|string
     */
    private function setCategoryFilterItem($storeCategory)
    {
        $filterItem = null;
        $urlParts = explode("N-", $storeCategory->url);

        if (empty($urlParts[1])) {
            return $filterItem;
        }

        echo "Next category url: {$storeCategory->url} >>>\n";
        if (strpos($urlParts[1], ';') === true) {
            $urlParts = explode(";", $urlParts[1]);
            $filterItem = $urlParts[0];
        } else {
            $filterItem = $urlParts[1];
        }

        return $filterItem;
    }

    protected function testResponse($productLink)
    {
        $productNode = Goutte::request('GET', $productLink)
            ->filter('meta[itemprop=description]')->eq(0);

        $productNode = Goutte::request('GET', $productLink);

        $content = $productNode->text();

        dd($content);

        preg_match('/<div class="tabs__wrap">(.*?)<\/div>/s', $content, $match);

    }
}
