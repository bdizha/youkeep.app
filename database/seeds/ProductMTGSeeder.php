<?php

use App\ProductType;
use Illuminate\Database\Seeder;
use App\Category;
use App\Store;

class ProductMTGSeeder extends DatabaseSeeder
{
    protected $domain = "https://www.archivestore.co.za";
    protected $storeId = null;

    protected $storesIds = [12, 69, 68, 67, 66, 65, 12, 61, 34, 50, 64, 63, 62, 29];
    protected $categories = [];
    protected $level = 0;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->storesIds = array_rand($this->storesIds, 2);

        $this->stores = Store::whereIn('id', $this->storesIds)
            ->get();

        foreach ($this->stores as $store) {
            $this->storeId = $store->id;
            $this->domain = $store->url;

            echo ">>>>>> Fetching store > categories: " . $store->name . "\n";

            $this->getCategories($store->url);

            $this->categories = Category::where('store_id', $this->storeId)
                ->get();

            echo ">>>>>> Decoding store > categories: " . $store->name . "\n";
            $this->decodeCategories($this->storeId);

            // Get all the category products
            foreach ($this->categories as $category) {
                echo ">>>>>> Fetching store > categories > products: " . $category->name . ' >> ' . $category->store->name . "\n";
                $this->processCategory($category);
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
            echo __LINE__ . " <> \n";

            $categoryLink = $this->domain . $node->attr('href');
            echo __LINE__ . " <> \n";
            $categoryName = $node->text();
            echo __LINE__ . " <> \n";

            $linkParts = explode(';jsessionid', $categoryLink);

            if (!empty($linkParts[0])) {
                $categoryName = ucwords(strtolower($categoryName));

                $categoryLink = $linkParts[0];

                echo "Category: " . $categoryName . "\n";
                echo "Category link: " . $categoryLink . "\n";
                echo __LINE__ . " <> \n";

                if (strpos($categoryLink, 'plp') !== false ||
                    strpos($categoryLink, 'rclp') !== false) {

//                    dd([$categoryName, $categoryLink]);
                    $this->setCategory($categoryName, $categoryLink);
                }

            }
        });
    }

    /**
     * @param $category
     * @param int $page
     */
    public function processCategory($category, $page = 1)
    {
        try {
            // find the category filter to use
            $filterItem = $this->setCategoryFilterItem($category);

            if (empty($filterItem)) {
                return;
            }

            // fetch the category home page
            list($totalPages, $productItems, $filterSets) = $this->setCategoryPages($filterItem, $page);

            if (!empty($filterSets)) {
                $this->setCategoryFilters($filterSets, $category);
            }

            if (!empty($productItems)) {

                if ($page > 1) {
                    echo __LINE__ . ">>>>>>>>next\n";
                }

                $this->setProducts($productItems, $category);
            }

            if ($page < $totalPages) {
                ++$page;
                echo __LINE__ . ">>>>>>>>previous\n";

                echo __LINE__ . ">>>>>>>> Next page: {$page} on category: {$category->name} \n";

                $this->processCategory($category, $page);
            } else {
                echo __LINE__ . "page($page) >= totalPages ($totalPages) > >>>>>>>>cool\n";
            }

            // set the search/lookup data
            $this->setSearchLookup($category);

        } catch (Exception $ex) {
//            dd($ex);
        }

//        dd([$category->name]);
    }

    protected function setProduct($category, $values)
    {
//        echo "Product external url: " . $values['external_url'] . "\n===================================>>\n";

        $attributes = [
            'external_url' => $values['external_url']
        ];

        $product = \App\Product::updateOrCreate($attributes, $values);

//        echo "Inserted: " . $values['name'] . "\n===================================>>\n";

        $product->updateAncestryIds($category);

        $values = [
            'store_id' => $this->storeId,
            'product_id' => $product->id
        ];

        \App\StoreProduct::updateOrCreate($values, $values);

//        dd([$product, $category]);

        return $product;
    }

    /**
     * @param $parentCategory
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
            'url' => $url,
        ];

        $values = [
            'name' => $categoryName,
            'level' => $this->level,
            'url' => $url,
            'order' => 1,
            'description' => $categoryDescription,
            'category_id' => null,
            'store_id' => $this->storeId,
            'type' => Category::TYPE_CATALOG
        ];

        $category = \App\Category::updateOrCreate($attributes, $values);
        $this->categories[] = $category->id;

        /* Add in the store category link */
        $values = [
            'store_id' => $this->storeId,
            'category_id' => $category->id,
        ];

        \App\StoreCategory::updateOrCreate($values, $values);
        return $category;
    }

    protected $parentCategory = null;

    /**
     * @param $productData
     * @param $product
     * @return array
     */
    private function setProductImages($productData, $product): void
    {
        foreach ($productData['images'] as $photo) {
            $productPhotoUrl = $photo['large'];
            $productThumbUrl = $photo['thumb'];
//            echo __LINE__ . " <> \n";

            // set the product photo
            $productPhoto = sha1($productPhotoUrl) . ".jpeg";
//            echo "Product photo: " . $productPhoto . "\n";

            $productThumb = sha1($productThumbUrl) . ".jpeg";
//            echo "Product thumb: " . $productThumb . "\n";
//            echo "Product thumb url : " . $productThumbUrl . "\n";

            if (!file_exists(public_path('storage/product/' . $productPhoto))) {
                Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));
                Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));
            } else {
                echo "Product photo skipped: " . public_path('storage/product/' . $productPhoto) . "\n";
            }

            $values = [
                'image' => $productPhoto,
                'thumb' => $productThumb,
                'product_id' => $product->id,
            ];

            \App\ProductPhoto::updateOrCreate($values, $values);
//            echo __LINE__ . " <> \n";
        }
    }

    /**
     * @param $categoryData
     * @param $category
     */
    private function setCategoryFilters($filterSets, $category): void
    {
        $productTypes = ProductType::$types;
        $productTypeKeys = array_flip($productTypes);

        foreach ($filterSets as $filterSet) {
            $name = ucwords(strtolower($filterSet['name']));
            $name = trim($name);

            $name = str_replace('Colour', 'Color', $name);

            // currently here we don't wanna process types that we dont need
            if (empty($productTypeKeys[$name])) {
                echo __LINE__ . " Skipping product type: {$name} \n";
                continue;
            }
            $type = $productTypeKeys[$name];

            echo __LINE__ . " Inserting product type: {$name} with type: {$type} \n";

            foreach ($filterSet['items'] as $filterItem) {
                // set the product type to variant relationship

                $name = ucwords($filterItem['name']);

                $attributes = [
                    'name' => $name
                ];

                $values = [
                    'name' => $name,
                    'type' => $type,
                ];

                $productType = \App\ProductType::updateOrCreate($attributes, $values);
                echo __LINE__ . " Inserting {$productType->name} product variant: {$name} \n";

                $this->processFilterProducts($filterItem['value'], $category, $productType);
            }
            echo __LINE__ . " <> \n";
        }
    }

    /**
     * @param $productItems
     * @param $category
     * @param $productType
     */
    private function setProducts($productItems, $category, $productType = null): void
    {
        foreach ($productItems as $productItem) {
            $productLink = strpos($productItem['pdpLinkUrl'], $this->domain) === false ?
                $this->domain . $productItem['pdpLinkUrl'] : $productItem['pdpLinkUrl'];
//            echo __LINE__ . " <> \n";

            $_product = App\Product::where('external_url', $productLink)->first();

            $productName = $productItem['name'];
            $productSummary = '';
//            echo __LINE__ . " <> \n";

            $productPrice = $productItem['latestPriceRange'];

            $priceParts = explode('-', $productPrice);
//            echo __LINE__ . " <> \n";

            if (!empty($priceParts)) {
                $productPrice = $priceParts[count($priceParts) - 1];
            }

            $productPrice = str_replace('R ', '', $productPrice);
            $productPrice = str_replace(',', '', $productPrice);

            $productPrice = trim($productPrice);
//            echo __LINE__ . " <> \n";

            $productNode = Goutte::request('GET', $productLink)
                ->filter('#product-static-data');

            $description = 'Not set';

            $attributes = [
                'name' => $productName,
                'price' => number_format((float)$productPrice, 2, '.', ''),
                'discount' => number_format((float)$productPrice, 2, '.', ''),
                'summary' => $productSummary,
                'external_url' => $productLink,
                'description' => $description
            ];
//            echo __LINE__ . " <> \n";

            $productData = json_decode($productNode->text(), true);

            if (empty($_product->id)) {
//                echo __LINE__ . " <> \n";
                // set the thumb
                $productThumbUrl = $productItem['defaultImages'][0];
//                echo __LINE__ . " <> \n";
                $productThumb = sha1($productThumbUrl) . ".jpeg";
//                echo "Product thumb: " . $productThumb . "\n";

                if (!file_exists(public_path('storage/product/' . $productThumb))) {
                    Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));
                } else {
                    echo "Product photo skipped: " . public_path('storage/product/' . $productThumb) . "\n";
                }

                // set the main photo
                $productPhotoUrl = !empty($productData['images'][0]['large']) ? $productData['images'][0]['large'] : $productThumbUrl;
//                echo __LINE__ . " <> \n";

                $productPhoto = sha1($productPhotoUrl) . ".jpeg";

//                echo "Product photo: " . $productPhoto . "\n";

//                echo __LINE__ . " <> \n";
                Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));

                $attributes['photo'] = $productPhoto;
                $attributes['thumbnail'] = $productThumb;
            } else {
                $_product->updateAncestryIds($category);
            }

//            echo __LINE__ . " <> \n";

            $product = $this->setProduct($category, $attributes);

            if (!empty($productData['images'])) {
                $this->setProductImages($productData, $product);
            }

            if (!empty($productType)) {
                $attributes = [
                    'product_type_id' => $productType->id,
                    'product_id' => $product->id,
                ];

                $values = [
                    'product_type_id' => $productType->id,
                    'product_id' => $product->id,
                    'price' => $product->price,
                    'discount' => $product->price,
                ];

                \App\ProductVariant::updateOrCreate($attributes, $values);
            }
        }
    }

    protected $productItems = [];

    /**
     * @param $filterItem
     * @param $category
     * @param $productType
     * @param int $page
     */
    private function processFilterProducts($filterItem, $category, $productType, $page = 1): void
    {
        list($totalPages, $productItems) = $this->setCategoryPages($filterItem, $page);

//        dd([$productItems]);

        $this->setProducts($productItems, $category, $productType);

        if ($totalPages > $page) {
            $this->productItems = $productItems;
            ++$page;
            echo "Next page for: {$page} >>> {$productType->name} {$category->url}\n";
            $this->processFilterProducts($filterItem, $category, $productType, $page);
        }

    }

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

        $totalPages = $categoryData['data']['totalPages'];
        echo "Total pages: {$totalPages} >>> for {$categoryFilterUrl}\n";
        $productItems = [];

        if (!empty($categoryData['data']['products'])) {
            $productItems = $categoryData['data']['products'];
        }

        $filterSets = [];
        if (!empty($categoryData['data']['filterSets'])) {
            $filterSets = $categoryData['data']['filterSets'];
        }
        return array($totalPages, $productItems, $filterSets);
    }

    /**
     * @param $category
     * @return mixed|string
     */
    private function setCategoryFilterItem($category)
    {
        $filterItem = null;
        $urlParts = explode("N-", $category->url);

        if (empty($urlParts[1])) {
            return $filterItem;
        }

        echo "Next category url: {$category->url} >>>\n";
        if (strpos($urlParts[1], ';') === true) {
            $urlParts = explode(";", $urlParts[1]);
            $filterItem = $urlParts[0];
        } else {
            $filterItem = $urlParts[1];
        }
        return $filterItem;
    }
}
