<?php

use App\AppServe;
use App\Currency;
use App\ProductAttribute;
use App\ProductCurrency;
use App\ProductValue;
use App\Serve;
use App\Store;
use App\StoreServe;

class AssetSeeder extends DatabaseSeeder
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
            ->whereNull('photo')
            ->get();

        foreach ($stores as $store) {
            if (!empty($store->photo_cover)) {
                $store->photo = $store->photo_cover;
                echo "Updating store photo from cover {$store->name}\n";
            } else {
                $product = Product::where('store_id', $store->id)
                    ->whereNotNull('photo')
                    ->first();

                if (!empty($product->photo)) {
                    $store->photo = $product->photo;
                }
                echo "Updating store photo from product {$store->name}\n";
            }

            $store->save();
        }

        $this->fetchProducts();
        die("fetchProducts >>> done");
    }

    /**
     * @param int $from
     */
    private function fetchProducts(int $from = 14460)
    {
        $to = $from + 2000;
        $link = "https://ftx.us/api/nft/nfts_filtered?startInclusive={$from}&endExclusive={$to}&nft_filter_string=%7B%22nftAuctionFilter%22%3A%22all%22%2C%22minPriceFilter%22%3Anull%2C%22maxPriceFilter%22%3Anull%2C%22seriesFilter%22%3A%5B%5D%2C%22traitsFilter%22%3A%7B%7D%2C%22searchStringFilter%22%3A%22%22%2C%22mintSourceFilter%22%3A%22all%22%2C%22include_not_for_sale%22%3Atrue%7D&sortFunc=offer_asc";

        $rowData = file_get_contents($link);

        $jsonData = json_decode(trim($rowData), true);
        $assets = $jsonData['result']['nfts'];

        foreach ($assets as $asset) {
            $this->fetchStore($asset);

            $this->randomizeCategory();

            $productItem = [
                'name' => $asset['name'],
                'external_url' => $asset['id'],
                'price' => (int)$asset['offerPrice'],
                'discount' => (int)$asset['offerPrice'],
                'summary' => $asset['description'],
                'description' => 'Not set',
                'photo' => $asset['imageUrl']
            ];

            try {
                $this->setProduct($productItem, $this->storeCategory);
                $this->setAttributes($asset);
                $this->setCurrency($asset);
            } catch (Exception $e) {
            }
        }

        $this->fetchProducts($to + 1);
    }

    /**
     * @param Array $asset
     */
    private function fetchStore(array $asset)
    {
        $collection = $asset['collection'];
        $series = $asset['series'];

        $query = json_encode(['collection' => $collection, 'include_not_for_sale' => true]);

        $query = urlencode($query);
        $storeLink = "https://ftx.us/api/nft/nfts_filtered?startInclusive=-1&endExclusive=1000000000&nft_filter_string={$query}";

        $rowData = file_get_contents($storeLink);

        $jsonData = json_decode($rowData, true);

        $storeData = [
            'url' => $storeLink,
            'content' => 'Series: ' . $series,
            'trading_hours' => serialize([]),
            'order' => 1,
            'phone' => 000000000,
            'can_deliver' => false,
            'can_pickup' => false,
            'rating' => 0,
            'rating_count' => 0,
            'app_id' => $this->app->id,
            'is_active' => true,
            'description' => 'Coming soon',
            'name' => $collection,
        ];

        if (!empty($jsonData['result']['nfts'][0])) {
            $asset = $jsonData['result']['nfts'][0];
            $storeData['description'] = trim(!empty($asset['description']) ? $asset['description'] : 'Coming soon');
            $storeData['photo'] = !empty($asset['thumbnailUrl']) ? $asset['thumbnailUrl'] : $asset['imageUrl'];
            $storeData['photo_cover'] = $asset['imageUrl'];
        }

        $this->setStore($storeData);
    }

    /**
     * @param $uuid
     */
    private function setStore($storeData)
    {
        $attributes = [
            'name' => $storeData['name'],
            'url' => $storeData['url'],
        ];

        $values = $storeData;

        $this->store = Store::updateOrCreate($attributes, $values);
        $this->storeId = $this->store->id;

        $this->setServes();

        echo ">>>>>>Inserting store: {$this->store->name} \n";
    }

    /**
     * @param $storeData
     */
    private function setServes(): void
    {
        $serves = Serve::where('app_id', $this->app->id)->get();

        foreach ($serves as $serve) {
            if (rand(0, 1)) {
                $values = [
                    'store_id' => $this->store->id,
                    'serve_id' => $serve->id,
                ];

                StoreServe::updateOrCreate($values, $values);
            }
        }
    }

    /**
     * @param $storeData
     */
    private function randomizeCategory(): void
    {
        $this->storeCategory = null;
        $categories = Serve::where('app_id', $this->app->id)->get();

        $categoryCount = $categories->count();

        $category = $categories[rand(0, $categoryCount - 1)];

        $this->level = 1;
        if (!empty($category)) {
            $this->setCategory($category->name);
        }
    }

    /**
     * @param $asset
     */
    private function setAttributes($asset): void
    {
        if (!empty($asset['attributesList'])) {

            foreach ($asset['attributesList'] as $attribute) {
                $assetAttribute = $attribute['trait_type'];
                $assetValue = $attribute['value'];

                echo ">>>>>> Inserting product attribute: {$assetAttribute} \n";

                $attributes = [
                    'name' => $assetAttribute
                ];

                $values = [
                    'name' => $assetAttribute
                ];

                $productAttribute = ProductAttribute::updateOrCreate($attributes, $values);

                $attributes = [
                    'product_attribute_id' => $productAttribute->id,
                    'product_id' => $this->product->id,
                ];

                $values = [
                    'content' => $assetValue,
                    'product_attribute_id' => $productAttribute->id,
                    'product_id' => $this->product->id,
                ];

                $productValue = ProductValue::updateOrCreate($attributes, $values);

                echo ">>>>>> Inserting product value: {$productValue->content} \n";
            }
        }
    }

    /**
     * @param $uuid
     */
    private function setCurrency($asset)
    {
        $attributes = [
            'code' => $asset['quoteCurrency']
        ];

        $values = [
            'name' => $asset['quoteCurrency'],
            'code' => $asset['quoteCurrency']
        ];

        $currency = Currency::updateOrCreate($attributes, $values);

        echo ">>>>>>Inserting currency: {$asset['quoteCurrency']} \n";

        if (!empty($this->product)) {
            $attributes = [
                'product_id' => $this->product->id,
                'currency_id' => $currency->id
            ];

            $values = [
                'product_id' => $this->product->id,
                'currency_id' => $currency->id
            ];

            ProductCurrency::updateOrCreate($attributes, $values);
        }
    }

    protected function setAsset($values)
    {
        $attributes = [
            'external_url' => $values['external_url']
        ];

        $values['is_active'] = true;
        $values['store_id'] = $this->storeId;

        unset($values['dimensions'], $values['photos'], $values['artist']);

        $this->product = \App\Product::updateOrCreate($attributes, $values);

        echo ">>>>>Inserting service: " . $this->product->name . " ::: {$this->product->external_url}\n";

        $this->setProductStore();
    }
}
