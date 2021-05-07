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
        echo ">>>> Start product photos update";

        $this->_updateProductPhotos();

        die("End product photos update <<<<");
    }

    private function _updateProductPhotos()
    {
        $products = Product::orderBy('created_at', 'DESC')
            ->get();

        $totalPurges = 0;
        $totalPhotosPurges = 0;

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
                    $image = public_path('storage/product/' . $photo->image);
                    $thumbnail = public_path('storage/product/' . $photo->thumb);

                    if (!file_exists($image) || !file_exists($thumbnail)) {
                        echo "Deleted photo {$photo->image}" . "\n";

                        $totalPhotosPurges++;
                        \App\ProductPhoto::where('id', $photo->id)->delete();
                    }else{
                        $product->thumbnail = $photo->thumb;
                        $product->photo = $photo->image;
                        $product->save();
                    }
                }
            }
        }

        echo "<> Total deleted {$totalPurges} products\n";
        echo "<> Total deleted {$totalPhotosPurges} product photos <>\n";
    }
}
