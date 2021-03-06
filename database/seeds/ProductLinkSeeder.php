<?php

use App\Category;
use App\CategoryProduct;
use App\ProductPhoto;
use Illuminate\Database\Seeder;
use \App\Product;
use \App\StoreProduct;
use \App\ProductVariant;

class ProductLinkSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::get();
        foreach ($products as $product) {
            echo "Updating Product Links >>>> {$product->name} \n";
            $this->setProductLink($product);
            echo "Updated Product Links >>>> {$product->name} \n";
        }
    }

    public function setProductLink(&$product)
    {
        $categoryProducts = CategoryProduct::where('product_id', $product->id)
            ->get();

        foreach ($categoryProducts as $categoryProduct) {
            $relatedCategoryProducts = CategoryProduct::where('category_id', $categoryProduct->category_id)
                ->inRandomOrder()
                ->take(12);

            foreach ($relatedCategoryProducts as $relatedCategoryProduct) {
                if($relatedCategoryProduct->product_id == $product->id){
                    continue;
                }

                $attributes = [
                    'product_id' => $product->id,
                    'related_id' => $relatedCategoryProduct->product_id
                ];

                $values = [
                    'type' => rand(1,3),
                    'product_id' => $product->id,
                    'related_id' => $relatedCategoryProduct->product_id
                ];

                \App\ProductLink::updateOrCreate($attributes, $values);
            }
        }
    }
}
