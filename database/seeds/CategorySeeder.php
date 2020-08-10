<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::orderBy('created_at', 'DESC')
//            ->with('products')
            ->where('id', 3572)
            ->get();

        dd($category);
    }
}
