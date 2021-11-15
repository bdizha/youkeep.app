<?php

use App\AppServe;
use App\Currency;
use App\Event;
use App\Product;
use App\Store;
use Carbon\Carbon;

class EventSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_setApp();

        $stores = Store::where('app_id', $this->app->id)
            ->whereNotNull('photo')
            ->get();

        foreach ($stores as $this->store) {
            $this->setEvents();
        }
        die("setEvents >>> done");
    }

    /**
     */
    private function setEvents()
    {
        $products = Product::where('store_id', $this->store->id)->get();

        foreach ($products as $product) {
            $eventTypes = App\Event::$types;

            foreach ($eventTypes as $key => $eventType) {
                $currencyId = Currency::CURRENCY_USD;
                if (!empty($product->currency->id)) {
                    $currencyId = $product->currency->id;
                }

                $values = [
                    'item_id' => $product->id,
                    'currency_id' => $currencyId,
                    'created_at' => Carbon::now()->subMinutes(rand(1, 9000)),
                    'type' => $key
                ];

                Event::updateOrCreate($values, $values);

                echo ">>>>>> Inserting event value: {$eventType} \n";
            }
        }
    }
}
