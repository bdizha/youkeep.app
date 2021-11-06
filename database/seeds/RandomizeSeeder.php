<?php

use App\Product;
use App\Store;
use Carbon\Carbon;

class RandomizeSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setApp();

        $this->setProductRandomizedAt();
        $this->setStoreRandomizedAt();
    }

    protected function setProductRandomizedAt(): void
    {
        $products = Product::inRandomOrder()
            ->get();

        foreach ($products as $product) {
            $product->randomized_at = Carbon::now()->subMinutes(rand(1, 10000000));
            echo ">>>> Product {$product->slug} randomized at{$product->randomized_at}\n";
            $product->save();
        }
    }

    protected function setStoreRandomizedAt(): void
    {
        $stores = Store::inRandomOrder()
            ->where('app_id', $this->app->id)
            ->get();

        foreach ($stores as $store) {
            $store->randomized_at = Carbon::now()->subMinutes(rand(1, 10000000));
            echo ">>>> Store {$store->slug} randomized at{$store->randomized_at}\n";
            $store->save();
        }
    }
}
