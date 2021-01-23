<?php

use App\Category;
use App\Lookup;
use App\Product;
use App\StoreCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $storeId = null;
    protected $categories = [];
    protected $parentStoreCategory = null;

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
            ->where('is_active', true)
            ->get();

        $category = $storeCategory->category;

        $attributes = [
            'route' => $category->route
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
                'route' => $category->route . "/" . $product->slug
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

    /**
     * @param $category
     * @return array
     */
    protected function setParentStoreCategory($storeCategory)
    {
        $this->parentStoreCategory = null;
        $urlParts = explode('/', $storeCategory->url);

        $urlParts = array_slice($urlParts, 4, count($urlParts) - 7);

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

            if (empty($parentStoreCategory)) {
                $parentStoreCategory = \App\StoreCategory::where('url', 'like', "%{$slug}/_/%")
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

    protected function decodeCategories($storeId)
    {
        foreach ($this->storeCategories as $key => $storeCategory) {
            $this->parentStoreCategory = null;

            $this->setParentStoreCategory($storeCategory);
        }
    }
}
