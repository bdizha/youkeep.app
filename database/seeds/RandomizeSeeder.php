<?php

use Illuminate\Database\Seeder;

use App\Category;

class RandomizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storeCategories = \App\StoreCategory::inRandomOrder()
            ->with('category')
            ->get();

        foreach ($storeCategories as $key => $storeCategory) {
            $storeCategory->randomized_at = $key;
            echo ">>>> {$storeCategory->category->name}\n";
            $storeCategory->save();
        }
    }
}
