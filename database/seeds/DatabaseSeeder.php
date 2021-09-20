<?php

use App\Category;
use App\CategoryProduct;
use App\Lookup;
use App\Product;
use App\ProductType;
use App\ProductVariant;
use App\StoreCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $storeId = null;
    protected $categories = [];
    protected $parentStoreCategory = null;
    protected $storeCategory = null;
    protected $filterBrand = null;
    protected $product = null;
    protected $level = 1;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }

    /**
     * @param $storeCategory
     */
    protected function setSearchLookup($storeCategory): void
    {
        $products = Product::whereHas('categories', function ($query) use ($storeCategory) {
            $query->where('category_products.category_id', $storeCategory->id);
        })
            ->where('is_active', true)
            ->get();

       $this->setLookupCategory($storeCategory, $products);

       $this->setLookupProducts($products, $storeCategory);
    }

    /**
     * @param $categoryName
     * @param $url
     * @return mixed
     */
    protected function setCategory($categoryName, $url)
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
            'type' => Category::TYPE_PRODUCT,
            'randomized_at' => date('Y-m-d'),
        ];

        $category = \App\Category::updateOrCreate($attributes, $values);
        $this->categories[] = $category->id;

        $arrows = str_pad("", 6 * $this->level, ">");

        echo "{$arrows} Category updated: {$category->slug}\n";

        $attributes = [
            'store_id' => $this->storeId,
            'category_id' => $category->id,
            'level' => $this->level,
            'parent_id' => $this->parentStoreCategory->id ?? null
        ];

        /* Add in the store category link */
        $values = [
            'store_id' => $this->storeId,
            'category_id' => $category->id,
            'url' => $url,
            'level' => $this->level,
            'parent_id' => $this->parentStoreCategory->id ?? null,
            'has_products' => $this->storeId == 24 ? 1 : 0,
            'has_categories' => $this->storeId == 24 ? 1 : 0,
            'randomized_at' => date('Y-m-d'),
        ];

        echo ">>>>>Updating lookup category :" . $category->name . "\n";

        $this->storeCategory = StoreCategory::updateOrCreate($attributes, $values);
        return $category;
    }

    protected function setProduct($values, $storeCategory)
    {
        $attributes = [
            'external_url' => $values['external_url']
        ];

        $values['is_active'] = true;
        $values['store_id'] = $this->storeId;

        unset($values['dimensions'], $values['photos'], $values['artist']);

        $this->product = \App\Product::updateOrCreate($attributes, $values);

        echo ">>>>>Inserting service: " . $this->product->name . " ::: {$this->product->external_url}\n";

        $this->setProductStore($values);

        $this->setProductCategory($storeCategory);
    }

    /**
     * @param $photo
     * @return string
     */
    protected function getFileExt($photo)
    {
        $ext = 'jpg';
        if (strpos($photo, 'png') !== FALSE) {
            $ext = 'png';
        }
        $photoName = sha1($photo) . ".{$ext}";
        return $photoName;
    }

    protected function setProductCategory($storeCategory)
    {
        $values = [
            'category_id' => $storeCategory->id,
            'product_id' => $this->product->id
        ];

        CategoryProduct::updateOrCreate($values, $values);
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
     * @param $filterItem
     * @param $productType
     */
    protected function setProductVariant($filterItem, $productType): void
    {
        $attributes = [
            'product_type_id' => $productType->id,
            'product_id' => $this->product->id,
        ];

        if (empty($filterItem['price'])) {
            $filterItem['price'] = !empty($this->product->price) ? $this->product->price : 0;
        }

        if (empty($filterItem['discount'])) {
            $filterItem['discount'] = !empty($this->product->discount) ? $this->product->discount : 0;
        }

        $values = [
            'product_type_id' => $productType->id,
            'product_id' => $this->product->id,
            'price' => $this->setPrice($filterItem['price']),
            'discount' => $this->setPrice($filterItem['discount']),
        ];

        ProductVariant::updateOrCreate($attributes, $values);
    }


    protected function setPrice($price)
    {
        $price = str_replace("R", "", $price);
        $price = str_replace(",", "", $price);
        $priceParts = explode(" ", trim($price));

        if (count($priceParts) > 1) {
            $price = $priceParts[0];
        }
        return trim($price);
    }

    /**
     * @param $category
     * @return array
     */
    protected function setParentStoreCategory($storeCategory)
    {
        $this->parentStoreCategory = null;

        $categoryUrl = str_replace('pclp/', '', $storeCategory->url);
        $categoryUrl = str_replace('plp/', '', $categoryUrl);
        $categoryUrl = str_replace('//', '/', $categoryUrl);

        $urlParts = explode('/', $categoryUrl);

        $urlParts = array_slice($urlParts, 2, count($urlParts) - 5);

        $urlPart = array_pop($urlParts);
        $urlParts[] = $urlPart;

        $slug = '';
        foreach ([$urlPart] as $part) {
            $slug .= '/' . $part;

            $slug = str_replace('plp/', '', $slug);
            $slug = str_replace('rclp/', '', $slug);

            $parentStoreCategory = \App\StoreCategory::where('url', 'like', "%{$slug}/_/%")
                ->with('category')
                ->where('store_id', $this->storeId)
                ->first();

            $categoryAttributes = [
                'id' => $storeCategory->id
            ];

            if (!empty($parentStoreCategory)) {
                $this->parentStoreCategory = $parentStoreCategory;

                $categoryValues = [
                    'level' => count($urlParts) + 1,
                    'parent_id' => $this->parentStoreCategory->id
                ];

                echo ">>>>>Updated parent {$this->parentStoreCategory->category->name} category for {$storeCategory->slug} >>>>> \n";
            } else {
                $categoryValues = [
                    'level' => 1,
                    'parent_id' => null
                ];
            }

            StoreCategory::updateOrCreate($categoryAttributes, $categoryValues);
        }

        return $urlParts;
    }

    protected function decodeCategories()
    {
        foreach ($this->storeCategories as $key => $storeCategory) {
            $this->parentStoreCategory = null;

//            $this->setParentStoreCategory($storeCategory);
        }
    }

    /**
     * @param string $productPhoto
     * @param string $productThumb
     * @param $product
     * @return array
     */
    protected function _setProductPhoto(string $productPhoto, string $productThumb, $product): array
    {
        $values = [
            'image' => $productPhoto,
            'thumb' => $productThumb,
            'product_id' => $product->id,
        ];

        \App\ProductPhoto::updateOrCreate($values, $values);
        return $values;
    }

    /**
     * @param array $values
     */
    protected function setProductStore(array $values): void
    {
        $values = [
            'store_id' => $this->storeId,
            'product_id' => $this->product->id
        ];

        \App\StoreProduct::updateOrCreate($values, $values);
    }

    protected function setCategoryBanner($storeCategory, $photo)
    {
        $photoName = $this->getFileExt($photo);

        try{
            $isActive = false;
            $storagePath = storage_path('app/public/category');
            $filePath = "{$storagePath}/{$photoName}";

            if (!file_exists($filePath)) {

                if(strpos($filePath, "http") === false){
                    $filePath = "https:" . $filePath;
                }

                exec("wget {$photo} -O {$filePath}");
            } else {
                echo "<<<<<< Product photo skipped: " . $filePath . "\n";
            }

            if (file_exists($filePath)) {
                list($width, $height) = getimagesize($filePath);

                $dimensionRatio = $width > $height ? ($height / $width) : ($width / $height);

                if ($dimensionRatio <= 1 && $dimensionRatio >= 0.60 || ($width > 300 && $height > 300)) {
                    $isActive = true;
                    echo ">>>>>> Product photo is suited : " . $photo . "\n";
                }
                else{
                    echo ">>>>>> Product photo is not suited : " . $photo . "\n";
                }
            }

            $attributes = [
                'photo' => $photoName,
                'store_category_id' => $storeCategory->id
            ];

            $values = [
                'photo' => $photoName,
                'store_category_id' => $storeCategory->id,
                'is_active' => $isActive
            ];

            \App\Banner::updateOrCreate($attributes, $values);

            echo ">>>>> Inserting category banner: " . $storeCategory->category->name . " ::: {$photo}\n";
        }
        catch (Exception $e){
            echo ">>>>> >>>>>> Failed category banner: " . $e->getMessage() . " ::: {$photo}\n";
        }
    }

    /**
     * @param $storeCategory
     * @param $products
     * @return void
     */
    protected function setLookupCategory($storeCategory, $products): void
    {
        $category = $storeCategory->category;

        $attributes = [
            'route' => $storeCategory->route
        ];

        $values = [
            'title' => $category->name,
            'type' => Lookup::TYPE_CATEGORY,
            'item_id' => $storeCategory->id,
            'order' => 1,
            'store_id' => $storeCategory->store_id,
            'photo' => $category->photo,
            'count' => $products->count(),
        ];

        echo ">>>>>Inserting lookup category :" . $category->name . "\n";

        Lookup::updateOrCreate($attributes, $values);
    }

    /**
     * @param $products
     * @param $storeCategory
     */
    protected function setLookupProducts($products, $storeCategory): void
    {
        foreach ($products as $product) {
            $attributes = [
                'route' => $product->route
            ];

            $values = [
                'title' => $product->name,
                'type' => Lookup::TYPE_PRODUCT,
                'item_id' => $product->id,
                'order' => 1,
                'store_id' => $storeCategory->store_id,
                'photo' => $product->photo,
                'count' => 1,
            ];

            echo ">>>>>Inserting lookup service :" . $product->name . "\n";

            Lookup::updateOrCreate($attributes, $values);
        }
    }

    /**
     * @param string $url
     * @return string
     */
    protected function _setCrawler(string $url): string
    {
        $encodedUrl = urlencode($url);
        return "https://api.proxycrawl.com/?token=XedJD-fi9KMpxSZfh_U2JA&url={$encodedUrl}";
    }
}
