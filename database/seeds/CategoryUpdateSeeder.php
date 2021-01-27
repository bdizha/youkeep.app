<?php

use App\Category;
use App\StoreCategory;
use App\Product;
use Illuminate\Database\Seeder;

class CategoryUpdateSeeder extends DatabaseSeeder
{
    protected $storesIds = [12, 7, 8, 9, 69, 68, 67, 66, 65, 61, 34, 50, 64, 63, 62, 29];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->setHighlights();

//        $this->setCategoryProducts();

        foreach ($this->storesIds as $storesId) {
            $this->storeId = $storesId;

            $this->storeCategories = \App\StoreCategory::where('store_id', $storesId)
                ->with('category')
                ->orderBy('updated_at', 'ASC')
                ->get();

            foreach ($this->storeCategories as $this->storeCategory) {
                $this->setFilters($this->storeCategory);
                $this->setFilters($this->storeCategory, true);
            }
        }
    }

    public function setFilters($storeCategory = null, $hasProducts = false)
    {
        echo "Updated category filter : {$storeCategory->url} >>>>> \n";

//        $this->setParentCategory($storeCategory);

        if (empty($hasProducts)) {
            $hasItemField = 'has_categories';
            $query = StoreCategory::orderBy('created_at', 'DESC')
                ->with('category')
                ->whereIn('store_id', $this->storesIds);

            if (!empty($storeCategory->id) && empty($hasProducts)) {
                $query->where('parent_id', $storeCategory->id);
            }

            $items = $query->get();
            $hasItems = $items->count() > 0;
        } else {
            $hasItemField = 'has_products';
            $hasItems = count($storeCategory->category->photos) > 0;

            if ($hasItems) {
                echo "Category has products: {$storeCategory->url} >>>>> \n";
            }
        }

        if (!empty($storeCategory->id)) {
            $values = [
                'product_count' => count($storeCategory->category->products),
                $hasItemField => $hasItems
            ];

            $attributes = [
                'id' => $storeCategory->id
            ];

            \App\StoreCategory::updateOrCreate($attributes, $values);
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
