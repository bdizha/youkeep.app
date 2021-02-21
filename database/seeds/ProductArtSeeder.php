<?php

use App\ProductType;
use App\Category;
use App\ProductPhoto;
use App\StoreCategory;
use App\Product;
use App\Store;

class ProductArtSeeder extends DatabaseSeeder
{
    protected $domain = "https://www.artfinder.com";
    protected $product = null;
    protected $storeId = null;
    protected $limit = 3;

    protected $storeIds = [70];
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
//        $this->testResponse('http://api.knuxt.local/api/art');
//        die('done');

        $categoryLink = 'http://api.knuxt.local/api/art';

        $storeIds = [];
        shuffle($this->storeIds);

        $storeIds[] = array_shift($this->storeIds);

        $this->stores = Store::whereIn('id', $storeIds)
            ->get();

        foreach ($this->stores as $store) {
            $this->storeId = $store->id;

            echo ">>>>>> Fetching store > categories: " . $store->name . "\n";
            $this->setCategories($categoryLink);

            $this->storeCategories = StoreCategory::where('store_id', $this->storeId)
                ->with('category')
                ->orderBy('store_categories.updated_at', "ASC")
                ->limit(100)
                ->get();

            echo ">>>>>> Setting category to parent relations categories: " . $store->name . "\n";
//            $this->setParentCategories();

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

    public function setCategories($categoryLink)
    {
        $category = null;
        $categoryNode = Goutte::request('GET', $categoryLink);
        $categoryNodes = $categoryNode->filter('.af-small-text a');

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
            $this->fetchCategoryProducts($storeCategory);

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

        $this->level = 1;
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
            'url' => trim($url, '/'),
            'level' => $this->level,
            'has_products' => true,
            'has_categories' => true,
        ];

        StoreCategory::updateOrCreate($values, $values);
        return $category;
    }

    protected $parentCategory = null;

    /**
     * @param $productItem
     * @return array
     */
    private function setProductPhotos($productItem): void
    {
        //        dd([$match, $productPhotosUrl, $productPhotos]);

        $photos = array_reverse($productItem['photos']);

        foreach ($photos as $key => $photo) {
            $productPhotoUrl = $photo['retina_url'];
            $productThumbUrl = $photo['url'];

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
     * @param $storeCategory
     */
    private function setProducts($productItems, $storeCategory): void
    {
        foreach ($productItems as $productItem) {
            $this->product = App\Product::where('external_url', $productItem['external_url'])->first();

            if (empty($this->product->id)) {
                $this->product = $this->setProduct($productItem, $storeCategory);
            }

            $filterSets = $this->getProductVariants($productItem);
            if (!empty($filterSets)) {
                $this->setProductTypes($filterSets, $this->product);
            }

            $this->setProductPhotos($productItem);
        }
    }

    protected $productItems = [];

    /**
     * @param $productNode
     * @return array
     */
    private function getProductVariants($productItem): array
    {
        $filterSets = [];
        if (!empty($productItem['dimensions'])) {

            foreach ($productItem['dimensions'] as $dimension) {
                $filterSets[] = [
                    'name' => $dimension,
                    'type' => 'Size'
                ];
            }
        }
        return $filterSets;
    }

    /**
     * @param $storeCategory
     * @param $page
     * @return array
     */
    private function fetchCategoryProducts($storeCategory, $page = 1): array
    {
        $categoryParts = explode('/', trim($storeCategory->url, "/"));

        $categorySlug = array_pop($categoryParts);

        $slugParts = explode("-", $categorySlug);

        if (empty($slugParts[1])) {
            echo "Category url in valid for category: {$storeCategory->url}\n";
            return [];
        }

        $time = time();

        $categoryUrl = $this->domain . "/shop/search/?limit=12&page={$page}&{$slugParts[0]}=$slugParts[1]&sort=best_match&time={$time}";

        $categoryNode = file_get_contents($categoryUrl);

        $categoryData = json_decode($categoryNode, true);

        if (empty($categoryData['results'])) {
            echo "Category data in valid for category: {$categoryUrl}\n";
            return false;
        }

        $productItems = [];
        foreach ($categoryData['results'] as $item) {
            $productName = $item['name'];
            $artistName = $item['artist_name'];
            $artistUrl = $this->domain . $item['artist_url'];
            $productUrl = $this->domain . trim($item['url'], "/");

            $productPrice = null;
            if (!empty($item['prices']['USD'])) {
                $productPrice = trim($item['prices']['USD']);
                $productPrice = ($productPrice * 20) * 1.06; // add 6% commission
            }

            $productItems[] = [
                'name' => trim($productName),
                'external_url' => $productUrl,
                'summary' => 'Not set',
                'description' => 'Not set',
                'price' => $this->setPrice($productPrice),
                'discount' => $this->setPrice($productPrice),
                'photos' => !empty($item['main_image_set']) ? $item['main_image_set'] : [],
                'dimensions' => $item['dimensions'],
                'artist' => [
                    'name' => $artistName,
                    'url' => $artistUrl
                ],
            ];
        };

        if (!empty($productItems)) {
            $this->setProducts($productItems, $storeCategory);
        }

        if (!empty($categoryData['num_pages'])) {
            $numPages = $categoryData['num_pages'];

            $page += 1;
            if (min($this->limit, $numPages) > $page) {
                return $this->fetchCategoryProducts($storeCategory, $page);
            }
        }

        return $productItems;
    }

    protected function setArtist($values = [])
    {
        $attributes = $values = [
            'slug' => $values['url'],
        ];

        $values['type'] = User::TYPE_ARTIST;
        $user = User::updateOrCreate($attributes, $values);

        // Set product artist
        $values = $values = [
            'user_id' => $user->id,
            'product_id' => $this->product->id,
        ];

        \App\ProductArtist::updateOrCreate($values, $values);
    }

    protected function testResponse($productLink)
    {
        $productNode = Goutte::request('GET', $productLink)
            ->filter('.af-small-text a')->attr('href');

        dd($productNode);

        $productNode = Goutte::request('GET', $productLink);

        $description = $this->getProductDescription($productNode->html());

        dd($description);
    }
}
