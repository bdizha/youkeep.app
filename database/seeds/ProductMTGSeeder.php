<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Store;

class ProductMTGSeeder extends Seeder
{
    private $domain = "https://www.archivestore.co.za";
    private $storeId = null;

    private $storesIds = [69, 68, 67, 66, 65, 12, 61, 34, 50, 64, 63, 62, 29];
    private $categories = [];
    private $level = 0;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->stores = Store::whereIn('id', $this->storesIds)
            ->get();

        foreach ($this->stores as $store) {
            $this->storeId = $store->id;
            $this->domain = $store->url;

            echo ">>>>>> Fetching store > categories: " . $store->name . "\n";

            $this->getCategories($this->domain);

            $this->categories = Category::where('store_id', $this->storeId)
//                ->where('slug', 'like', '%men-18%')
//                ->where('slug', '=', 'footwear-19')
                ->get();

            echo ">>>>>> Decoding store > categories: " . $store->name . "\n";
            $this->decodeCategories();

//            die('done');

            // Get all the category products
            foreach ($this->categories as $category) {
                echo ">>>>>> Fetching store > categories > products: " . $category->name . ' >> ' . $category->store->name . "\n";
                $this->getProducts($category);
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

    public function getProducts($category)
    {

        try {
            $categoryNode = Goutte::request('GET', $category->url);
            $productNodes = $categoryNode->filter('#product-listing-static-data');

            if ($productNodes->count()) {
                echo __LINE__ . " <> \n";

                $productItems = json_decode($productNodes->text(), true);

                foreach ($productItems['data']['products'] as $productItem) {
                    $productLink = strpos($productItem['pdpLinkUrl'], $this->domain) === false ?
                        $this->domain . $productItem['pdpLinkUrl'] : $productItem['pdpLinkUrl'];
                    echo __LINE__ . " <> \n";

                    $_product = App\Product::where('external_url', $productLink)->first();

                    $productName = $productItem['name'];
                    $productSummary = '';
                    echo __LINE__ . " <> \n";

                    $productPrice = $productItem['latestPriceRange'];
                    echo __LINE__ . " <> \n";

                    $productPrice = str_replace('R ', '', $productPrice);
                    $productPrice = str_replace(',', '', $productPrice);

                    $productPrice = trim($productPrice);
                    echo __LINE__ . " <> \n";


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
                    echo __LINE__ . " <> \n";
                    echo __LINE__ . " <> \n";

                    $productData = json_decode($productNode->text(), true);


                    if (empty($_product->id)) {
                        echo __LINE__ . " <> \n";
                        // set the thumb
                        $productThumbUrl = $productItem['defaultImages'][0];
                        echo __LINE__ . " <> \n";
                        $productThumb = sha1($productThumbUrl) . ".jpeg";
                        echo "Product thumb: " . $productThumb . "\n";

                        if (!file_exists(public_path('storage/product/' . $productThumb))) {
                            Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));
                        } else {
                            echo "Product photo slipped: " . public_path('storage/product/' . $productThumb) . "\n";
                        }

                        // set the main photo
                        $productPhotoUrl = $productData['brandImageURL'];
                        echo __LINE__ . " <> \n";

                        $productPhoto = sha1($productPhotoUrl) . ".jpeg";

                        echo "Product photo: " . $productPhoto . "\n";

                        echo __LINE__ . " <> \n";
                        Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));

                        $attributes['photo'] = $productPhoto;
                        $attributes['thumbnail'] = $productThumb;
                    } else {
                        $_product->updateAncestryIds($category);
                    }

                    echo __LINE__ . " <> \n";

                    $product = $this->setProduct($category, $attributes);

                    if (!empty($productData['images'])) {
                        foreach ($productData['images'] as $photo) {
                            $productPhotoUrl = $photo['large'];
                            $productThumbUrl = $photo['thumb'];
                            echo __LINE__ . " <> \n";

                            // set the product photo
                            $productPhoto = sha1($productPhotoUrl) . ".jpeg";
                            echo "Product photo: " . $productPhoto . "\n";

                            $productThumb = sha1($productThumbUrl) . ".jpeg";
                            echo "Product thumb: " . $productThumb . "\n";
                            echo "Product thumb url : " . $productThumbUrl . "\n";

                            if (!file_exists(public_path('storage/product/' . $productPhoto))) {
                                Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));
                                Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));
                            } else {
                                echo "Product photo slipped: " . public_path('storage/product/' . $productPhoto) . "\n";
                            }

                            $values = [
                                'image' => $productPhoto,
                                'thumb' => $productThumb,
                                'product_id' => $product->id,
                            ];

                            \App\ProductPhoto::updateOrCreate($values, $values);
                            echo __LINE__ . " <> \n";
                        }
                    } else {

//                        dd([1, $productData]);
                    }

                }
            }
        } catch (Exception $ex) {
//            dd([$ex->getMessage(), $category->url]);
        }

//        dd([$category->name]);
    }

    function setProduct($category, $values)
    {
        echo "Product external url: " . $values['external_url'] . "\n===================================>>\n";

        $attributes = [
            'external_url' => $values['external_url']
        ];

        $product = \App\Product::updateOrCreate($attributes, $values);

        echo "Inserted: " . $values['name'] . "\n===================================>>\n";

        $product->updateAncestryIds($category);

        $values = [
            'store_id' => $this->storeId,
            'product_id' => $product->id
        ];

        \App\StoreProduct::updateOrCreate($values, $values);

//        dd([$product, $category]);

        return $product;
    }

    function decodeCategories()
    {
        foreach ($this->categories as $key => $category) {
            $this->parentCategory = null;

            echo "{$key} >>>\n";

            $url = $category->url;

            $urlParts = $this->setParentCategory($url);

            $attributes = [
                'url' => $category->url
            ];

            echo 'Processing category ::::' . $category->url . "\n<<===================================\n";

            if (!empty($this->parentCategory) && $this->parentCategory->id != $category->id) {
                $values = [
                    'level' => count($urlParts),
                    'category_id' => $this->parentCategory->id,
                    'store_id' => $this->storeId
                ];

                $category = \App\Category::updateOrCreate($attributes, $values);

                echo "Updated category: " . $category->name . str_pad('*', $category->level * 2, '=', STR_PAD_LEFT) . "\n";

//                dd($this->parentCategory);
            } elseif (empty($this->parentCategory->id)) {
                $values = [
                    'level' => 1,
                    'category_id' => null,
                    'store_id' => $this->storeId
                ];

                \App\Category::updateOrCreate($attributes, $values);
            } else {
                echo 'Skipped category ::::' . $category->level . ' <> ' . $url . "\n<<===================================\n";
            }
        }
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
            'store_id' => $this->storeId
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
     * @param $url
     * @return array
     */
    private function setParentCategory($url)
    {
        $urlParts = explode('/', $url);

        $urlParts = array_slice($urlParts, 4, count($urlParts) - 7);

        $slug = '';
        foreach ($urlParts as $part) {
            $slug .= '/' . $part;

            $slug = str_replace('plp/', '', $slug);
            $slug = str_replace('rclp/', '', $slug);

            $parentCategory = Category::where('url', 'like', "%plp{$slug}/_/%")
                ->where('store_id', $this->storeId)
                ->first();
            if (empty($parentCategory)) {
                $parentCategory = Category::where('url', 'like', "%rclp{$slug}/_/%")
                    ->where('store_id', $this->storeId)
                    ->first();
            }

            if (!empty($parentCategory)) {
                $this->parentCategory = $parentCategory;
            }
        }

//        dd([$slug, $this->parentCategory]);
        return $urlParts;
    }
}
