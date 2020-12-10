<?php

use App\Category;
use App\Lookup;
use App\Product;
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
     * @param $category
     */
    protected function setSearchLookup($category): void
    {
        $products = Product::whereHas('categories', function ($query) use ($category) {
            $query->where('category_products.category_id', $category->id);
        })
            ->where('is_active', true)
            ->get();

        $attributes = [
            'route' => $category->route
        ];

        $values = [
            'title' => $category->name,
            'type' => 1,
            'item_id' => $category->id,
            'order' => 1,
            'store_id' => $category->store_id,
            'photo' => $category->photo,
            'count' => $products->count(),
        ];

        echo ">>>>>Inserting category ::: " . $category->name . "\n";

        Lookup::updateOrCreate($attributes, $values);

        foreach ($products as $product) {
            $attributes = [
                'route' => $category->route . "/" . $product->slug
            ];

            $values = [
                'title' => $product->name,
                'type' => 2,
                'item_id' => $product->id,
                'order' => 1,
                'store_id' => $category->store_id,
                'photo' => $product->photo,
                'count' => 1,
            ];

            echo ">>>>>Inserting product ::: " . $product->name . "\n";

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

        $slug = '';
        foreach ($urlParts as $part) {
            $slug .= '/' . $part;

            $slug = str_replace('plp/', '', $slug);
            $slug = str_replace('rclp/', '', $slug);

            $parentStoreCategory = \App\StoreCategory::where('url', 'like', "%plp{$slug}/_/%")
                ->with('category')
                ->where('store_id', $this->storeId)
                ->first();

            if (empty($parentStoreCategory)) {
                $parentStoreCategory = \App\StoreCategory::where('url', 'like', "%rclp{$slug}/_/%")
                    ->with('category')
                    ->where('store_id', $this->storeId)
                    ->first();
            }

            if (!empty($parentStoreCategory)) {
                $this->parentStoreCategory = $parentStoreCategory;

                $categoryAttributes = [
                    'id' => $storeCategory->id
                ];

                $categoryValues = [
                    'parent_id' => $this->parentStoreCategory->category_id
                ];

                echo "Updated parent {$this->parentStoreCategory->category->name} category for {$storeCategory->slug} >>>>> \n";
                \App\StoreCategory::updateOrCreate($categoryAttributes, $categoryValues);

                if ($storeCategory->category->name === 'Furniture' && count($urlParts) > 0) {
//                    dd([$urlParts, $storeCategory, $this->parentStoreCategory]);
                }
            }
        }

        return $urlParts;
    }

    protected function decodeCategories($storeId)
    {
        foreach ($this->storeCategories as $key => $storeCategory) {
            $this->parentStoreCategory = null;

            $category = $storeCategory->category;

            echo "{$key} >>>\n";

            $url = $storeCategory->url;

            $urlParts = $this->setParentStoreCategory($storeCategory);

            echo 'Processing category ::::' . $storeCategory->url . "\n<<===================================\n";

            $attributes = ['id' => $storeCategory->id];

            if (!empty($this->parentStoreCategory) && $this->parentStoreCategory->id != $storeCategory->id) {
                $values = [
                    'level' => count($urlParts) + 1,
                    'parent_id' => $this->parentStoreCategory->category_id,
                ];

                if($storeCategory->url === 'https://www.home.co.za/plp/dining/furniture/_/N-27iu'){
//                    dd([$urlParts, $this->parentStoreCategory, 'level' => count($urlParts) + 1]);
                }

                \App\StoreCategory::updateOrCreate($attributes, $values);

                echo "Updated category: " . $storeCategory->category->name . str_pad('*', $storeCategory->level * 2, '=', STR_PAD_LEFT) . "\n";

            } elseif (empty($this->parentStoreCategory->id)) {
                $values = [
                    'parent_id' => null,
                    'level' => count($urlParts) + 1
                ];

//                if ($storeCategory->url === 'https://www.home.co.za/rclp/furniture/_/N-2c9x') {
//                    dd([$storeCategory, $urlParts]);
//                }

                \App\StoreCategory::updateOrCreate($attributes, $values);
            } else {
                echo 'Skipped category ::::' . $category->level . ' <> ' . $url . "\n<<===================================\n";
            }
        }
    }
}
