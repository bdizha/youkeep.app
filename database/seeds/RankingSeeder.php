<?php

use App\AppServe;
use App\Store;

class RankingSeeder extends DatabaseSeeder
{
    protected $domain = 'https://opensea.io';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setApp();

        $stores = Store::where('app_id', $this->app->id)
            ->get();

        foreach ($stores as $store) {
            $this->setRanking($store);
        }

        dd('done');

        $this->fetchProducts();
        die("fetchProducts >>> done");
    }

    /**
     * @param array
     */
    private function setRanking($store): void
    {
       $store->setRanking();
    }
}
