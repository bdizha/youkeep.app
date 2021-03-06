<?php

use App\AppServe;
use App\Serve;
use App\Store;
use App\StoreServe;
use Illuminate\Support\Str;

class ServeSeeder extends DatabaseSeeder
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

        $this->setStoreServes();

//        $this->fetchServes();
        die("fetchServes >>> done");
    }

    private function setStoreServes()
    {
        $serves = Serve::where('app_id', $this->app->id)->get();
        $servesCount = $serves->count();

        if ($servesCount > 0) {
            $stores = Store::where('app_id', $this->app->id)
                ->get();

            foreach ($stores as $store) {
                $serveId = $serves[rand(0, $servesCount - 1)]->id;

                $values = [
                    'store_id' => $store->id,
                    'serve_id' => $serveId
                ];

                StoreServe::updateOrCreate($values, $values);

                echo ">>>>>>updated store serve: {$store->slug} \n";
            }
        }
    }

    private function fetchServes()
    {
        $link = url("/api/home/categories");

        $serveNode = Goutte::request('GET', $link);
        $serveNodes = $serveNode->filter('.QbTKh');

        $serveNodes->each(function ($node) {
            echo __LINE__ . " <> \n";

            if ($node->filter('.kCOfJW')->count()) {
                $serveName = $node->filter('.kCOfJW')->text();
                echo __LINE__ . " <> \n";

                $serveName = Str::slug($serveName, " ");
                $serveName = ucwords(strtolower($serveName));

                $originalUrl = $node->filter('img')->attr('src');

                $originalUrl = str_replace('/static/images/icons/', '', $originalUrl);

                $photoUrl = "http://api.shopple.local/serves/{$originalUrl}";

                $this->servePhoto = $this->getSha1File('category', $photoUrl);

                $this->setServe($serveName);
            }
        });
    }

    /**
     * @param $serveName
     */
    protected function setServe($serveName)
    {
        $serveDescription = 'Not set';

        /* Update or create this serve */
        $attributes = [
            'name' => $serveName,
        ];

        $values = [
            'name' => $serveName,
            'photo' => $this->servePhoto,
            'app_id' => $this->app->id,
            'description' => $serveDescription
        ];

        $serve = Serve::updateOrCreate($attributes, $values);

        $arrows = str_pad("", 6 * $this->level, ">");

        echo "{$arrows} Serve updated: {$serve->slug}\n";

        return $serve;
    }
}
