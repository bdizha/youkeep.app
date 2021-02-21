<?php

use App\Category;
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
    protected $filterBrand = null;
    protected $product = null;

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
            $query->where('category_products.category_id', $storeCategory->category_id);
        })
            ->get();

        $category = $storeCategory->category;

        $attributes = [
            'route' => $category->route . '/' . $storeCategory->level_padded
        ];

        $values = [
            'title' => $category->name,
            'type' => Lookup::TYPE_CATEGORY,
            'item_id' => $category->id,
            'order' => 1,
            'store_id' => $storeCategory->store_id,
            'photo' => $category->photo,
            'count' => $products->count(),
        ];

        echo ">>>>>Inserting lookup category :" . $category->name . "\n";

        Lookup::updateOrCreate($attributes, $values);

        foreach ($products as $product) {
            $attributes = [
                'route' => "/product/" . $product->slug
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

            echo ">>>>>Inserting lookup product :" . $product->name . "\n";

            Lookup::updateOrCreate($attributes, $values);
        }
    }

    protected function setProduct($values, $storeCategory)
    {
        $attributes = [
            'external_url' => $values['external_url']
        ];

        $values['store_id'] = $this->storeId;

        unset($values['dimensions'], $values['photos'], $values['artist']);

        $product = \App\Product::updateOrCreate($attributes, $values);

        $product->updateAncestryIds($storeCategory);

        $values = [
            'store_id' => $this->storeId,
            'product_id' => $product->id
        ];

        \App\StoreProduct::updateOrCreate($values, $values);

        return $product;
    }

    /**
     * @param $filterSets
     * @param $product
     */
    protected function setProductTypes($filterSets, $product): void
    {
        $productTypes = ProductType::$types;
        $productTypeKeys = array_flip($productTypes);

        foreach ($filterSets as $filterItem) {
            $name = $filterItem['name'];
            $name = trim($name);

            $typeName = $filterItem['type'];

            $type = $productTypeKeys[$typeName];

            echo ">>>>>>Inserting product type: {$name} with type: {$typeName} \n";

            $attributes = [
                'name' => $name
            ];

            $values = [
                'name' => $name,
                'type' => $type,
            ];

            $productType = \App\ProductType::updateOrCreate($attributes, $values);
            echo ">>>>>>Inserting {$productType->name} product variant: {$name} \n";

            $this->setProductVariant($filterItem, $product, $productType);
        }

        $this->filterBrand = [];
    }


    /**
     * @param $filterItem
     * @param $product
     * @param $productType
     */
    protected function setProductVariant($filterItem, $product, $productType): void
    {
        $attributes = [
            'product_type_id' => $productType->id,
            'product_id' => $product->id,
        ];

        dump($filterItem);

        if (empty($filterItem['price'])) {
            $filterItem['price'] = !empty($product->price) ? $product->price : 0;
        }

        if (empty($filterItem['discount'])) {
            $filterItem['discount'] = !empty($product->discount) ? $product->discount : 0;
        }

        $values = [
            'product_type_id' => $productType->id,
            'product_id' => $product->id,
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

        dd([$urlPart, $urlParts]);

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
}
