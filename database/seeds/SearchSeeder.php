<?php

use App\StoreCategory;

use Illuminate\Database\Seeder;

class SearchSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $store = App\Store::where('id', 12)->first();
//        dd($store->photos);

        $storeCategories = StoreCategory::orderBy('created_at', 'DESC')
            ->get();

        foreach ($storeCategories as $storeCategory) {

            // set the search/lookup data
            $this->setSearchLookup($storeCategory);
        }
    }
}
