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
        $categories = Category::inRandomOrder()
            ->with('category')
            ->get();

        foreach ($categories as $key => $category) {
            $category->randomized_at = \Carbon\Carbon::now()->subMinutes(rand(1, 10000000));
            echo ">>>> {$category->name} randomized at{$category->randomized_at}\n";
            $category->save();
        }
    }
}
