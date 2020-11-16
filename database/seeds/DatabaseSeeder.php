<?php

use App\Category;
use App\Lookup;
use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $storeId = null;
    protected $categories = [];
    protected $parentCategory = null;

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
    protected function setParentCategory($category)
    {
        $this->parentCategory = null;
        $urlParts = explode('/', $category->url);

        $urlParts = array_slice($urlParts, 4, count($urlParts) - 7);

//        dd([$urlParts, $category]);

        $slug = '';
        foreach ($urlParts as $part) {
            $slug .= '/' . $part;

            $slug = str_replace('plp/', '', $slug);
            $slug = str_replace('rclp/', '', $slug);

            $parentCategory = Category::where('url', 'like', "%plp{$slug}/_/%")
                ->where('store_id', $category->store_id)
                ->first();

            if (empty($parentCategory)) {
                $parentCategory = Category::where('url', 'like', "%rclp{$slug}/_/%")
                    ->where('store_id', $category->store_id)
                    ->first();
            }

            if (!empty($parentCategory)) {
                $this->parentCategory = $parentCategory;

                $categoryValues = [
                    'category_id' => $this->parentCategory->id,
                ];

                $categoryAttributes = [
                    'id' => $category->id
                ];

                echo "Updated parent {$this->parentCategory->name} category for {$category->slug} >>>>> \n";
                Category::updateOrCreate($categoryAttributes, $categoryValues);
            }
        }

        return $urlParts;
    }

    protected function decodeCategories($storeId)
    {
        foreach ($this->categories as $key => $category) {
            $this->parentCategory = null;

            echo "{$key} >>>\n";

            $url = $category->url;

            $urlParts = $this->setParentCategory($category);

            $attributes = [
                'url' => $category->url
            ];

            echo 'Processing category ::::' . $category->url . "\n<<===================================\n";

            if (!empty($this->parentCategory) && $this->parentCategory->id != $category->id) {
                $values = [
                    'level' => count($urlParts) + 1,
                    'category_id' => $this->parentCategory->id,
                    'store_id' => $storeId,
                    'type' => Category::TYPE_CATALOG
                ];

                $category = \App\Category::updateOrCreate($attributes, $values);

                echo "Updated category: " . $category->name . str_pad('*', $category->level * 2, '=', STR_PAD_LEFT) . "\n";

            } elseif (empty($this->parentCategory->id) && $category->level != 1) {
                $values = [
                    'level' => 1,
                    'category_id' => null,
                    'store_id' => $storeId
                ];

                \App\Category::updateOrCreate($attributes, $values);
            } else {
                echo 'Skipped category ::::' . $category->level . ' <> ' . $url . "\n<<===================================\n";
            }
        }
    }
}
