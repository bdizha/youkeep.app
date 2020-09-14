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
            ->get();

        foreach ($categories as $key => $category) {
            $category->randomized_at = $key;
            echo ">>>> {$category->name}\n";
            $category->save();
        }
    }
}
