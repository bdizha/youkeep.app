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
                ->get();

            foreach ($relatedCategoryProducts as $relatedCategoryProduct) {
                if($relatedCategoryProduct->product_id == $product->id){
                    continue;
                }

                $attributes = $values = [
                    'product_id' => $product->id,
                    'related_id' => $relatedCategoryProduct->product_id
                ];

                $values = [
                    'type' => \App\ProductLink::TYPE_RELATED,
                    'product_id' => $product->id,
                    'related_id' => $relatedCategoryProduct->product_id
                ];

                \App\ProductLink::updateOrCreate($attributes, $values);
            }
        }
    }
}
