<?php

use Illuminate\Database\Seeder;
use \App\Product;

class ProductUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::with('photos')
            ->get();

        foreach ($products as $product) {
            echo "Updating Product >>>> {$product->name} \n";

            if (!empty($product->photos[0])) {
                echo "Updating Product Photo >>>> {$product->name} \n";

                if(empty($product->photo)){
                    $product->photo = $product->photos[0]['image'];
                }
            }

            $this->setStore($product);
            $product->save();
        }
    }

    public function setStore(&$product)
    {
        $storeId = null;
        $storeProduct = \App\StoreProduct::where('product_id', $product->id)
            ->first();

        if (!empty($storeProduct)) {
            $storeId = $storeProduct->store_id;
        }

        $product->store_id = $storeId;
    }
}
