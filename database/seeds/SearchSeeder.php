<?php

use App\Product;
use App\Category;
use App\Lookup;

use Illuminate\Database\Seeder;

class SearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::orderBy('created_at', 'DESC')
            ->where('is_active', true)
            ->has('store')
            ->get();

        foreach ($categories as $category) {

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
    }
}
