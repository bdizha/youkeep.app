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
            $storeCategory->randomized_at = \Carbon\Carbon::now()->subMinutes(rand(1, 10000000));
            echo ">>>> {$storeCategory->category->name}\n";
            $storeCategory->save();
        }
    }
}
