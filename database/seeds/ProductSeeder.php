<?php

use App\ProductPhoto;
use Illuminate\Database\Seeder;

use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_updateProductPhotos();

        die("Well done.");
    }

    private function _deleteIncorrectProducts()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();

        $totalPurges = 0;
        foreach ($products as $product) {
            $photo = public_path('storage/product/' . $product->photo);
            $thumbnail = public_path('storage/product/' . $product->thumbnail);
            if (!file_exists($photo) || !file_exists($thumbnail)) {
                echo "Not found images for product {$products->slug}:\n";
                echo $photo . "\n";

                $totalPurges++;

                \App\CategoryProduct::where('product_id', $product->id)->delete();
                \App\ProductPhoto::where('product_id', $product->id)->delete();
                \App\ProductVariant::where('product_id', $product->id)->delete();
                \App\StoreProduct::where('product_id', $product->id)->delete();

                $product->categories()->delete();
                $product->delete();
            } else {
                echo "Found images for product {$products->slug}:\n";
                echo $photo . "\n";
            }
        }

        echo "<> Total deleted {$totalPurges} products <>\n";
    }

    private function _updateProductPhotos()
    {
        $products = Product::orderBy('created_at', 'DESC')
            ->whereNotNull('store_id')
            ->get();

        dd($products[0]->store);


        $totalPurges = 0;
        foreach ($products as $product) {
            $photos = ProductPhoto::where('product_id', $product->id)
                ->take(1)
                ->get();

            if ($photos->count() == 0) {
                \App\CategoryProduct::where('product_id', $product->id)->delete();
                \App\ProductPhoto::where('product_id', $product->id)->delete();
                \App\ProductVariant::where('product_id', $product->id)->delete();
                \App\StoreProduct::where('product_id', $product->id)->delete();

                $product->categories()->delete();
                $product->delete();
                $totalPurges++;
            } else {
                foreach ($photos as $photo) {
                    $product->thumbnail = $photo->thumb;
                    $product->photo = $photo->image;
                    $product->save();
                    break;
                }
            }
        }

        echo "<> Total deleted {$totalPurges} products <>\n";
    }
}
