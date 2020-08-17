<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Store;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->categories = [
            [
                'name' => "It's shopping time!"
            ],
            [
                'name' => "You might also like"
            ],
            [
                'name' => "What's popular for you"
            ],
            [
                'name' => "Recommended for you"
            ],
            [
                'name' => "New stores for you"
            ],
        ];

        foreach ($this->categories as $category) {
            $this->setCategory($category);
        }

        $this->updateCategories();

        die("updateCategories >>> done");
    }

    /**
     * @param array $category
     */
    private function setCategory(array $category)
    {
        $attributes = [
            'name' => $category['name']
        ];

        $values = [
            "level" => 0,
            "store_id" => 0,
            "type" => 1,
            "description" => 'Not set',
            "order" => 1,
        ];

        $category = Category::updateOrCreate($attributes, $values);
        echo "Updated category :: " . $category['name'] . "\n";
    }

    /**
     */
    private function updateCategories()
    {
        // randomly assign stores to categories

        $categories = Category::get();

        foreach ($categories as $category) {
            $name = \Illuminate\Support\Str::slug($category->name, ' ');
            $name = ucwords($name);

            $category->name = $name;
            $category->save();

            echo "Updated category :: " . $category['name'] . "\n";

            if ($category->type == 1) {
                $stores = Store::inRandomOrder()->take(12)->get();

                foreach ($stores as $store) {
                    $attributes = [
                        'category_id' => $category->id,
                        'store_id' => $store->id
                    ];

                    $values = [
                        'category_id' => $category->id,
                        'store_id' => $store->id
                    ];

                    \App\StoreCategory::updateOrCreate($attributes, $values);
                }
            }
        }
    }
}
