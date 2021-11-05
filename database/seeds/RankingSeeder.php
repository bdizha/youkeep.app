<?php

use App\AppServe;
use App\Ranking;
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
        $aggregate = DB::table('products')
            ->select('store_id', DB::raw('SUM(price) as volume'), DB::raw('count(id) as assets'), DB::raw('min(price) as floor'), DB::raw('max(price) as roof'))
            ->groupBy('store_id')
            ->where('store_id', $store->id)
            ->first();

        if (!empty($aggregate)) {
            $rankingData = (array)$aggregate;

            $rankingData['diff_day'] = rand(-150, 96);
            $rankingData['diff_week'] = rand(-150, 96);
            $rankingData['diff_month'] = rand(-150, 96);
            $rankingData['owners'] = rand(1, 3000);

            $rankingData['diff_month'] = rand(-150, 96);

            $hash = md5(json_encode($rankingData));

            $attributes = [
                'hash' => $hash
            ];

            $ranking = Ranking::updateOrCreate($attributes, $rankingData);
            echo ">>>>>Inserting ranking: {$ranking->hash}\n";
        }
        else {
            echo "<<<<<Skipping raking store: {$store->name}\n";
        }
    }
}
