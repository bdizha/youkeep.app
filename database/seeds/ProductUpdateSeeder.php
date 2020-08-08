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
            ->has('photos')
            ->get();

        foreach ($products as $product) {
            echo "Updating Product photo >>>> {$product->name} \n";

            $product->photo = $product->photos[0]['image'];
            $product->save();
        }
    }
}
