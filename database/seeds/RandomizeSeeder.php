<?php

use App\Product;
use App\Ranking;
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

        $this->setRankingRandomizedAt();
        $this->setProductRandomizedAt();
        $this->setStoreRandomizedAt();
    }

    protected function setRankingRandomizedAt(): void
    {
        $rankings = Ranking::inRandomOrder()
            ->get();

        foreach ($rankings as $ranking) {
            $ranking->randomized_at = Carbon::now()->subMinutes(rand(1, 10000000));
            echo ">>>> Ranking {$ranking->hash} randomized at{$ranking->randomized_at}\n";
            $ranking->save();
        }
    }

    protected function setProductRandomizedAt(): void
    {
        $products = Product::inRandomOrder()
            ->whereHas('store', function ($query) {
                $query->where('stores.app_id', $this->app->id);
            })->get();

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
