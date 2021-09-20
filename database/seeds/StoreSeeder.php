<?php

use App\Category;
use App\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    protected $photoCovers = [
    ];

    protected $stores = [];
    protected $domain = '';

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
     * @param array $stores
     * @return array
     */
    private function _setStoreData()
    {
        $baseUrl = "https://api.sezzle.in/v1/get-store-types?ignore-non-store-types=true";

        $categoriesData = file_get_contents($baseUrl);

        $categories = json_decode($categoriesData);

        foreach ($categories as $categoryData) {
            $categoryName = urldecode($categoryData->name);
            $categoryId = $categoryData->id;

            $offset = 36;
            $this->_setCategoryStores($categoryId, $offset, $categoryName);
        }
    }

    /**
     * @param $categoryId
     * @param int $offset
     * @param string $categoryName
     */
    private function _setCategoryStores($categoryId, int $offset, string $categoryName): void
    {
        $categoryUrl = "https://api.sezzle.in/v1/get-stores?search-term=&type-code={$categoryId}&limit=36&offset={$offset}";

        $attributes = [
            'name' => $categoryName
        ];

        $values = [
            'name' => $categoryName,
            'description' => 'Not set',
            'order' => 0
        ];

        $category = Category::updateOrCreate($attributes, $values);

        $categoryStoresData = file_get_contents($categoryUrl);
        $categoryStores = json_decode($categoryStoresData, true);

        $storeData = [];
        foreach ($categoryStores as $categoryStore) {
            $storeData['name'] = $categoryStore['name'];
            $storeData['category_id'] = $category['id'];
            $storeData['photo'] = $categoryStore['logo_url'];
            $storeData['photo_cover'] = $categoryStore['background_url'];
            $storeData['url'] = $categoryStore['website'];
            $storeData['description'] = 'Not set';
            $storeData['content'] = 'Not set';
            $storeData['phone'] = 'Not set';
            $storeData['trading_hours'] = 'Not set';
            $storeData['photos'] = [$categoryStore['background_url']];

            $this->_setStore($storeData);
        }

//        dd($categoryStores);

        if (!empty($categoryStores)) {

            echo "\n>>>>>> category url {$categoryUrl}\n";
            $offset += 36;
            $this->_setCategoryStores($categoryId, $offset, $categoryName);
        }
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
            } else {
                echo "<<<<<< Skipping store photo :: " . $photoName . "\n";
            }
            $store['photo'] = $photoName;
        }

        $photos = [];
        foreach ($store['photos'] as $key => $photo) {
            $storePhoto = $this->getFileExt($photo);
            if (!file_exists(public_path('storage/store/' . $storePhoto))) {
                Storage::disk('store')->put($storePhoto, file_get_contents($photo));
                $photos[] = $storePhoto;

                if ($key == 0) {
                    $store['photo_cover'] = $storePhoto;
                }
            } else {
                echo "<<<<<< Skipping store photo :: " . $storePhoto . "\n";
            }

            $store['photo_cover'] = $storePhoto;
        }

        unset($store['photos']);

        $existStore = Store::where('name', $store['name'])->first();
        if (!empty($existStore)) {
            $store['description'] = $existStore->description;
        }

        $attributes = [
            'name' => $store['name'],
            'app_id' => env('APP_ID')
        ];
        $store['app_id'] = env('APP_ID');
        $store['order'] = 1;

        $store = Store::updateOrCreate($attributes, $store);

        echo "Updated store :: " . $store['name'] . "\n";

        foreach ($photos as $photo) {
            $values = [
                'photo' => $photo,
                'store_id' => $store->id
            ];

            \App\StorePhoto::updateOrCreate($values, $values);
            echo ">>>>> Adding store photo :: " . $photo . "\n";
        }
    }

    /**
     * @param $photo
     * @return string
     */
    protected function getFileExt($photo)
    {
        $ext = 'jpg';
        if (strpos($photo, 'png') !== FALSE) {
            $ext = 'png';
        }
        $photoName = sha1($photo) . ".{$ext}";
        return $photoName;
    }
}
