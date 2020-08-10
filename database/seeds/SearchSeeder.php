<?php

use App\Product;
use App\Category;
use App\Lookup;

use Illuminate\Database\Seeder;

class SearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::orderBy('created_at', 'DESC')
            ->where('is_active', true)
            ->has('store')
            ->get();

        foreach ($categories as $category) {

            // set the search/lookup data
            $this->setSearchLookup($category);
        }
    }
}
