<?php

use App\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    protected $photoCovers = [
    ];

    protected $stores = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setStoreData();
        return;

        foreach ($this->stores as $store) {
//            $this->_setStore($store);
        }
    }

    /**
     * @param $photo
     * @return string
     */
    private function getFileExt($photo)
    {
        $ext = 'jpg';
        if (strpos($photo, 'png') !== FALSE) {
            $ext = 'png';
        }
        $photoName = sha1($photo) . ".{$ext}";
        return $photoName;
    }

    protected $domain = 'https://www.waterfront.co.za';

    /**
     * @param array $stores
     * @return array
     */
    private function _setStoreData()
    {
        $crawler = Goutte::request('GET', 'http://api.shopple.local/api/home/stores');

        $crawler->filter('.store-block h4')->each(function ($node) {
            $store = [];

            if($node->filter('a')->count() > 0){

                $externalUrl = $node->filter('a')->attr('href');

                $name = $node->filter('a')->text();
                $store['name'] = $name;

                $storeNode = Goutte::request('GET', $externalUrl);

//                dd($externalUrl);

                if ($storeNode->filter('.tenant-content')->count()) {

                    $photoNode = $storeNode->filter('.info-overview .logo img');
                    $photoUrl = null;

                    if ($photoNode->count() > 0) {
                        $photoUrl = $photoNode->attr('data-srcset');

                        $photoUrlParts = explode(" ", $photoUrl);

                        if(count($photoUrlParts) > 0){
                            $photoUrl = $this->domain . $photoUrlParts[0];
                        }
                    }

                    if(!empty($photoUrl)){

                        echo "Store name: <<<<<<{$name}>>>>>\n";

                        $store['photo'] = $photoUrl;

                        $storeNode->filter('.slick .popup')->each(function ($node) use (&$store) {
                            $photoUrl = null;
                            if($node->count() > 0){
                                $photoUrl = $node->attr('href');
                            }

                            $store['photos'][] = $this->domain . $photoUrl;
                        });

                        $description = 'Coming soon';
                        $store['description'] = $description;

                        $content = 'Coming soon';
                        if($storeNode->filter('.entry-content')->count() > 0){
                            $content = $storeNode->filter('.entry-content')->text();
                        }

                        $store['content'] = trim($content);

                        $storeNode->filter('.additional-information .row span')->each(function ($node) use (&$store) {
                            if($node->filter('.trading_hours')->count() > 0){
                                $tradingHours = $node->filter('.trading_hours')->text();
                                $store['trading_hours'] = $tradingHours;
                            }

                            if($node->filter('.telephone')->count() > 0){
                                $phone = $node->filter('.telephone')->text();
                                $store['phone'] = $phone;
                            }

                            if($node->filter('.email')->count() > 0){
                                $email = $node->filter('.email')->text();
                                $store['email'] = $email;
                            }

                            if($node->filter('.website')->count() > 0){
                                $url = $node->filter('.website')->text();
                                $store['url'] = $url;
                            }
                        });

                        try {
                            $this->_setStore($store);
                        } catch (Exception $e) {

                        }
                    }

                } else {
                    echo ">>>Skipped node" . "\n";
                }
            }
        });
    }

    /**
     * @param array $store
     */
    private function _setStore(array $store)
    {

        if (!empty($store['photo'])) {
            $photoName = $this->getFileExt($store['photo']);
            if (!file_exists(public_path('storage/store/' . $photoName))) {
                Storage::disk('store')->put($photoName, file_get_contents($store['photo']));
                $store['photo'] = $photoName;
            }
            else{
                echo "<<<<<< Skipping store photo :: " . $photoName . "\n";
            }
        }

        $photos = [];
        foreach($store['photos'] as $key => $photo){
            $storePhoto = $this->getFileExt($photo);
            if (!file_exists(public_path('storage/store/' . $storePhoto))) {
                Storage::disk('store')->put($storePhoto, file_get_contents($photo));

                $store['photo_cover'] = $storePhoto;
                $photos[] = $storePhoto;

                if($key == 0){
                    $store['photo_cover'] = $storePhoto;
                }
            }
            else{
                echo "<<<<<< Skipping store photo :: " . $storePhoto . "\n";
            }
        }

        unset($store['photos']);

        $existStore = \App\Store::where('name', $store['name'])->first();
        if(!empty($existStore)){
            $store['description'] = $existStore->description;
        }

        $attributes = [
            'name' => $store['name']
        ];
        $store['order'] = 1;

        $store = \App\Store::updateOrCreate($attributes, $store);

        echo "Updated store :: " . $store['name'] . "\n";

        foreach($photos as $photo){
            $values = [
                'photo' => $photo,
                'store_id' => $store->id
            ];

            \App\StorePhoto::updateOrCreate($values, $values);
            echo ">>>>> Adding store photo :: " . $photo . "\n";
        }
    }
}
