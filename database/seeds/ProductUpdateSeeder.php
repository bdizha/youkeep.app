<?php

use App\CategoryProduct;
use App\ProductPhoto;
use Illuminate\Database\Seeder;
use \App\Product;
use \App\StoreProduct;
use \App\ProductVariant;

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

            $photos = ProductPhoto::where('product_id', $product->id)
                ->get();

            if (file_exists(public_path('storage/product/' . $product->photo))) {
                if (empty($product->thumbnail) || !file_exists(public_path('storage/product/' . $product->thumbnail))) {
                    $product->thumbnail = $product->photo;
                    $product->save();
                }
            }

            if (!empty($photos[0])) {
                foreach ($photos as $photo) {
                    if (!file_exists(public_path('storage/product/' . $photo['image'])) ||
                        !file_exists(public_path('storage/product/' . $photo['thumb']))) {
                        \App\ProductPhoto::where('id', $photo['id'])
                            ->delete();

                        echo "Deleted Product Photo >>>> " . public_path('storage/product/' . $photo['thumb']) . " \n";
                    } else {
                        echo "Skipped Product Photo >>>> {$photo['image']} \n";

                        if (empty($product->photo) || !file_exists(public_path('storage/product/' . $product->photo))) {
                            echo "Updating Product Photo >>>> {$product->name} \n";
                            $product->photo = $photo['image'];
                        }
                        if (empty($product->thumbnail) || !file_exists(public_path('storage/product/' . $product->thumbnail))) {
                            echo "Updating Product Thumb >>>> {$product->name} \n";
                            $product->thumbnail = $photo['thumb'];
                        }

                        $product->save();
                    }
                }
            } else {
                if (empty($product->photo) || !file_exists(public_path('storage/product/' . $product->photo)) ||
                    empty($product->thumbnail) || !file_exists(public_path('storage/product/' . $product->thumbnail))) {

                    CategoryProduct::where('product_id', $product->id)
                        ->delete();

                    StoreProduct::where('product_id', $product->id)
                        ->delete();

                    ProductVariant::where('product_id', $product->id)
                        ->delete();

                    echo "Deleted Product >>>> " . $product->name . "\n";

                    $product->delete();
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
