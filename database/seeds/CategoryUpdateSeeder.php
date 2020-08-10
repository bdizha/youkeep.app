<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class CategoryUpdateSeeder extends Seeder
{
    protected $storesIds = [12, 69, 68, 67, 66, 65, 61, 34, 50, 64, 63, 62, 29];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setHighlights();
        $this->setCategoryProducts();

        foreach ($this->storesIds as $storesId) {
            $this->storeId = $storesId;

            $this->categories = Category::orderBy('created_at', 'DESC')
                ->where('store_id', $this->storeId)
//                ->whereIn('id', [3732])
                ->get();
//        dd($categories);

            $this->decodeCategories($this->storeId);

            foreach ($this->categories as $category) {
                $this->setFilters($category);
                $this->setFilters($category, true);
            }
        }
    }

    public function setFilters($category = null, $hasProducts = false)
    {
        echo "Updated category filter : {$category->slug} >>>>> \n";

        $this->setParentCategory($category);

        $hasItemField = 'has_categories';
        $query = Category::orderBy('created_at', 'DESC')
            ->with('products')
            ->whereIn('store_id', $this->storesIds)
            ->where('is_active', true);

        if (!empty($category->id) && !$hasProducts) {
            $query->where('category_id', $category->id);
        }

        $query->has('products', '>', 1);

        if ($hasProducts) {
            $query->where('id', $category->id);
            $hasItemField = 'has_products';
        }

        $items = $query->get();
        $hasItems = $items->count() > ($hasProducts ? 0 : 1);

        if (!empty($category->id)) {
            $categoryValues = [
                $hasItemField => $hasItems,
                'name' => ucwords(strtolower($category->name))
            ];

            $categoryAttributes = [
                'id' => $category->id
            ];

//            dd([$categoryValues, $category]);

            Category::updateOrCreate($categoryAttributes, $categoryValues);
        }
    }

    public function setHighlights()
    {
        $stores = \App\Store::orderBy('created_at', 'DESC')
            ->where('is_active', true)
            ->whereIn('id', $this->storesIds)
            ->get();

        foreach ($stores as $store) {
            $categoryValues = [
                'category_id' => 1
            ];

            echo "Updating store category ::: {$store->slug}\n";

            $categoryAttributes = [
                'store_id' => $store->id,
                'category_id' => 1,
            ];

            \App\StoreCategory::updateOrCreate($categoryAttributes, $categoryValues);
        }

        $categories = Category::orderBy('created_at', 'DESC')
            ->has('products', '>', 1)
            ->where('level', '=', 1)
            ->where('id', '!=', 1)
            ->where('is_active', true)
            ->get();

        foreach ($categories as $category) {
            $categoryValues = [
                'category_id' => 1
            ];

            echo "Updating category ::: {$category->slug}\n";

            $categoryAttributes = [
                'id' => $category->id
            ];

            Category::updateOrCreate($categoryAttributes, $categoryValues);
        }
        echo "Highlights set successfully >>>>> \n";
    }

    public function setCategoryProducts()
    {
        $products = Product::orderBy('created_at', 'DESC')
            ->with('categories')
            ->where('is_active', true)
            ->get();

        foreach ($products as $product) {
            foreach ($product->categories as $category) {

                echo 'Updating category -> product link for ' . $category->name . "\n";

                $product->updateAncestryIds($category);
            }
        }
    }
}
