<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class CategoryUpdateSeeder extends DatabaseSeeder
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
                ->get();

            $this->decodeCategories($this->storeId);

            foreach ($this->categories as $category) {
                $category->name = trim($category->name);
                $category->save();

                $this->setFilters($category);
                $this->setFilters($category, true);
            }
        }
    }

    public function setFilters($category = null, $hasProducts = false)
    {
        echo "Updated category filter : {$category->slug} >>>>> \n";

        $this->setParentCategory($category);

        if (empty($hasProducts)) {
            $hasItemField = 'has_categories';
            $query = Category::orderBy('created_at', 'DESC')
                ->whereIn('store_id', $this->storesIds)
                ->where('is_active', true);

            if (!empty($category->id) && empty($hasProducts)) {
                $query->where('category_id', $category->id);
            }

            $items = $query->get();
            $hasItems = $items->count() > ($hasProducts ? 0 : 1);
        } else {
            $hasItemField = 'has_products';
            $hasItems = count($category->products) > 0;

            if ($hasItems) {
                echo "Category has products: {$category->slug} >>>>> \n";
            }
        }

        if (!empty($category->id)) {
            $categoryValues = [
                $hasItemField => $hasItems,
                'name' => ucwords(strtolower($category->name)),
                'type' => Category::TYPE_CATALOG
            ];

            $categoryAttributes = [
                'id' => $category->id
            ];

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
