<?php

use Illuminate\Database\Seeder;
use App\Category;

class ProductWoolworthsSeeder extends Seeder
{
    private $domain = "https://www.woolworths.co.za";
    private $imageBaseUrl = "https://images.woolworthsstatic.co.za/";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Lingerie-Sleepwear/Lingerie-Sets/_/N-14okntg";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Lingerie-Sleepwear/Sleepwear/_/N-1z13s46";
//    private $category_link = "https://www.woolworths.co.za/cat/Father-s-Day/Promotions/_/N-1icxvcq";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Promotions/3-for-2-Selected-Single-Panties/_/N-tsgovl";
//    private $category_link = "https://www.woolworths.co.za/cat/Men/Clothing/Knitwear/_/N-1z13s3dZ1duxrn1?No=0";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Clothing/New-In/_/N-w68owu";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Clothing/Dresses-Jumpsuits/_/N-1p4o85u";
//    private $category_link = "https://www.woolworths.co.za/cat/Beauty/Makeup/Face/_/N-1z13ryk";
//    private $category_link = "https://www.woolworths.co.za/cat/Homeware/Home-Decor/Scatter-Cushions-Throws/_/N-1z13rzq";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Lingerie-Sleepwear/_/N-1z13s4d";
//    private $category_link = "https://www.woolworths.co.za/cat/Baby/Boys-0-24-MO-/_/N-2zpzqx";
//    private $category_link = "https://www.woolworths.co.za/cat/Men/Clothing/New-In/_/N-1davgsh";
//    private $category_link = "https://www.woolworths.co.za/cat/Father-s-Day/Clothing-Accessories/_/N-13mtfhi";
//    private $category_link = "https://www.woolworths.co.za/cat/Men/Shoes/_/N-se4gda";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Clothing/_/N-1z13s4r";
//    private $category_link = "https://www.woolworths.co.za/cat/Baby/Baby-Essentials/_/N-1fsgvwz";
//    private $category_link = "https://www.woolworths.co.za/cat/Homeware/Home-Decor/_/N-1z13rzr";
//    private $category_link = "https://www.woolworths.co.za/cat/Homeware/Dining/_/N-1z13rzy";
//    private $category_link = "https://www.woolworths.co.za/cat/Homeware/Bathroom/_/N-1z13s0e";
//    private $category_link = "https://www.woolworths.co.za/cat/Homeware/Appliances/_/N-222ezn";
//    private $category_link = "https://www.woolworths.co.za/cat/Men/Underwear-Sleepwear/_/N-ovdkva";
//    private $category_link = "https://www.woolworths.co.za/cat/Women/Clothing/Knitwear/_/N-1z13s4n";
//    private $category_link = "https://www.woolworths.co.za/cat/Kids/Girls-2-15-/Underwear-Socks/_/N-1z13s2n";
//    private $category_link = "https://www.woolworths.co.za/cat/Beauty/Skincare/_/N-1z13ryp";
//    private $category_link = "https://www.woolworths.co.za/cat/Beauty/Fragrance/_/N-1z13ryf";
    private $category_link = "https://www.woolworths.co.za/cat/Women/Lingerie-Sleepwear/Panties/_/N-1z13s4a";

    private $categories = [];
    private $level = 0;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->decodeCategories();

//        die;

        $category = Category::where('url', $this->category_link)
            ->first();

        if (empty($category)) {
            die('Oops, this category link cannot be found in the system: ' . $this->domain);
        }

        // Get all the category products
        $this->getProducts($category);
        die("Well done.");
    }

    public function getCategories($categoryLink, $parentCategory = null, $parentNode = null)
    {
        $category = null;
        $categoryNode = Goutte::request('GET', $categoryLink);
        $categoryNodes = $categoryNode->filter('ul.main-nav__list li.main-nav__list-item');

        $categoryNodes->each(function ($node) use ($parentCategory) {
            echo __LINE__ . " <> \n";

            if ($node->filter('a')->count() > 0) {
                $categoryLink = $this->domain . $node->filter('a')->attr('href');
                echo __LINE__ . " <> \n";
                $categoryName = $node->filter('.main-nav__link')->text();
                echo __LINE__ . " <> \n";

                $categoryName = ucwords(strtolower($categoryName));

                echo "Category: " . $categoryName . "\n";
                echo "Category link: " . $categoryLink . "\n";
                echo __LINE__ . " <> \n";

                $category = $this->setCategory($categoryName, $categoryLink);

                echo "Category level: " . @$parentCategory->level . " <<>> " . $category->level . "\n";

                if (false) {
                    echo __LINE__ . " <> \n";
                    $this->getProducts($categoryLink, $category);
                    echo __LINE__ . " <> \n";
                }
            }
        });
    }

    public function getProducts($category)
    {
        $categoryNode = Goutte::request('GET', 'http://Spazamall.local/import-store-images');
        $productNodes = $categoryNode->filter('.product-list__item');

        if ($productNodes->count()) {
            echo __LINE__ . " <> \n";
            $productNodes->each(function ($node) use ($category) {
                $productLink = $this->domain . $node->filter('a')->attr('href');
                echo __LINE__ . " <> \n";

                $p = App\Product::where('external_url', $productLink)->first();
                echo __LINE__ . " <> \n";

                if ($node->filter('.range--title')->count()) {

                    echo __LINE__ . " <> \n";
                    $productName = $node->filter('.range--title')->text();
                    $productSummary = $node->filter('.no-wrap--ellipsis')->text();
                    echo __LINE__ . " <> \n";

                    $hasVariants = $node->filter('.product__ColorSwatches')->count() > 0;
                    if ($hasVariants) {
                        // get variants here
                    }

                    $productPrice = null;
                    if ($node->filter('.product__price .price')->count()) {
                        $productPrice = $node->filter('.product__price .price')->text();
                        echo __LINE__ . " <> \n";

                        $productPrice = str_replace('R ', '', $productPrice);
                    }
                    echo __LINE__ . " <> \n";

                    if (!empty($productPrice) && $node->filter('.product-card__img')->count()) {
                        echo __LINE__ . " <> \n";
                        // set the thumb
                        $productThumbUrl = $node->filter('.product-card__img')->attr('src');
                        echo __LINE__ . " <> \n";
                        $productThumb = sha1($productThumbUrl) . ".jpeg";
                        echo "Product thumb: " . $productThumb . "\n";

                        Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));

                        $productNode = Goutte::request('GET', $productLink);

                        $description = null;
                        $productInfo = [];

                        if ($productNode->filter('script')->eq(0)->count()) {
                            echo __LINE__ . " <> \n";

                            $productNode->filter('script')->each(function ($node) use (&$productInfo, $description) {
                                if (strpos($node->text(), 'productInfo') !== false) {
                                    echo __LINE__ . " <> \n";

                                    $productInfo = $node->text();
                                    echo __LINE__ . " <> \n";

                                    $productInfo = str_replace('window.__INITIAL_STATE__ =', '', $productInfo);

                                    $productInfo = json_decode($productInfo, true);
                                    $productInfo = $productInfo['pdp']['productInfo'];
                                }
                            });
                        }
                        echo __LINE__ . " <> \n";

                        if (!empty($productInfo)) {

                            $description = @$productInfo['longDescription'];

                            // set the main photo
                            $productPhotoUrl = $this->imageBaseUrl . @$productInfo['colourSKUs'][0]['images'][0]['external'];
                            echo __LINE__ . " <> \n";
                            $productPhoto = sha1($productPhotoUrl) . ".jpeg";

                            echo "Product photo: " . $productPhoto . "\n";

                            echo __LINE__ . " <> \n";
                            Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));

//                            dd([$productName, $productSummary, $productPrice, $productThumb, $productPhoto]);

                            $attributes = [
                                'name' => $productName,
                                'price' => number_format((float)$productPrice, 2, '.', ''),
                                'discount' => number_format((float)$productPrice, 2, '.', ''),
                                'summary' => $productSummary,
                                'external_url' => $productLink,
                                'description' => $description,
                                'photo' => $productPhoto,
                                'thumbnail' => $productThumb,
                            ];

                            echo __LINE__ . " <> \n";

                            $product = $this->setProduct($category, $attributes);
                            $defaultStyleId = $productInfo['defaultStyleId'];

                            if (!empty($productInfo['styleIdSizeSKUsMap'][$defaultStyleId])) {
                                $productTypes = $productInfo['styleIdSizeSKUsMap'][$defaultStyleId];

                                echo __LINE__ . " <> \n";

                                foreach ($productTypes as $productType) {
                                    $hasSize = !empty($productType['size']);
                                    $hasColor = !empty($productType['filter']);

                                    $types = [];
                                    if ($hasSize) {
                                        $types[] = [
                                            'type' => 1,
                                            'name' => $productType['size']
                                        ];
                                    }

                                    if ($hasColor) {
                                        $types[] = [
                                            'type' => 2,
                                            'name' => $productType['filter']
                                        ];
                                    }
                                    echo __LINE__ . " <> \n";

                                    foreach ($types as $type) {
                                        $values = $type;
                                        $productType = \App\ProductType::updateOrCreate($values, $values);
//                                        dd($productType);

                                        $values = [
                                            'product_type_id' => $productType->id,
                                            'product_id' => $product->id,
                                            'price' => $product->price,
                                            'discount' => $product->discount,
                                        ];

                                        $productVariant = \App\ProductVariant::updateOrCreate($values, $values);
                                    }
                                }
                            }

                            if (!empty($productInfo['colourSKUs'][0]['images'])) {
                                $productPhotos = $productInfo['colourSKUs'][0]['images'];

                                echo __LINE__ . " <> \n";

                                foreach ($productPhotos as $photo) {
                                    $productPhotoUrl = $this->imageBaseUrl . $photo['external'];
                                    $productThumbUrl = $productPhotoUrl . '?w=145&h=185&q=80';
                                    echo __LINE__ . " <> \n";

                                    // set the product photo
                                    $productPhoto = sha1($productPhotoUrl) . ".jpeg";
                                    echo "Product photo: " . $productThumb . "\n";

                                    $productThumb = sha1($productThumbUrl) . ".jpeg";
                                    echo "Product thumb: " . $productThumb . "\n";
                                    echo "Product thumb url : " . $productThumbUrl . "\n";

                                    Storage::disk('product')->put($productPhoto, file_get_contents($productPhotoUrl));

                                    Storage::disk('product')->put($productThumb, file_get_contents($productThumbUrl));

                                    $values = [
                                        'image' => $productPhoto,
                                        'thumb' => $productThumb,
                                        'product_id' => $product->id,
                                    ];

//                                    dd($values);

                                    \App\ProductPhoto::updateOrCreate($values, $values);
                                    echo __LINE__ . " <> \n";
                                }
                            }
                        }

                    } else {
                        echo "<<<<<<<< Skipped production link: " . $productLink . " <> \n";
                    }
                }
            });
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

//        $product->updateCategories($categories);

        $values = [
            'store_id' => 1,
            'product_id' => $product->id
        ];

        \App\StoreProduct::updateOrCreate($values, $values);

        return $product;
    }

    function decodeCategories()
    {
        $categories = Category::get();

        foreach ($categories as $key => $category) {

            echo "{$key} >>>\n";

            $url = $category->url;

            $urlParts = explode('/', $url);

            $urlParts = array_slice($urlParts, 4, count($urlParts) - 7);

            $slug = '';
            foreach ($urlParts as $part) {
                $slug .= '/' . $part;
            }

            $parentCategory = Category::where('url', 'like', "%cat{$slug}/_/%")->first();

            if (empty($parentCategory)) {
                $parentCategory = Category::where('url', 'like', "%dept{$slug}/_/%")->first();
            }

            if (!empty($parentCategory) && $parentCategory->id != $category->id) {
                $attributes = [
                    'url' => $category->url
                ];

                $values = [
                    'level' => count($urlParts) + 1,
                    'category_id' => $parentCategory->id
                ];

                $category = \App\Category::updateOrCreate($attributes, $values);

                echo "Updated category: " . $category->url . str_pad('*', $category->level * 2, '=', STR_PAD_LEFT) . "\n";

//                dd($category);
            } else {
                echo 'Skipped category ::::' . $url . "\n<<===================================\n";
            }
        }
    }

    /**
     * @param $parentCategory
     * @param $categoryName
     * @return mixed
     */
    private function setCategory($categoryName, $url)
    {
        $categoryDescription = 'Not set';

        $this->level = 1;
        $this->categories = [];

        echo "Category name: " . str_pad('*', $this->level * 2, '*', STR_PAD_LEFT) . $categoryName . "\n";

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
            'category_id' => null
        ];

        $category = \App\Category::updateOrCreate($attributes, $values);
        $this->categories[] = $category->id;

        /* Add in the store category link */
        $values = [
            'store_id' => 1,
            'category_id' => $category->id,
        ];

        \App\StoreCategory::updateOrCreate($values, $values);
        return $category;
    }
}
