<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Store;

class CategorySeeder extends Seeder
{
    protected $storeCategories = [4784, 4788, 4789];

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
                'name' => "Today's Highlights"
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
            [
                'name' => "Browse our picks"
            ],
            [
                'name' => "Coming soon stores"
            ],
            [
                'name' => "We're loving"
            ],
            [
                'name' => "It's that time again"
            ],
            [
                'name' => "Summer bells"
            ],
            [
                'name' => "Yay & oooo deals"
            ],
        ];

        $this->updateCategories();

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
        $name = \Illuminate\Support\Str::slug($category['name'], ' ');
        $name = ucwords($name);

        $attributes = [
            'name' => $name
        ];

        $values = [
            "level" => 0,
            "store_id" => 0,
            "type" => 1,
            "description" => 'Not set',
            "order" => 1,
            "has_stores" => true,
        ];

        $category = Category::updateOrCreate($attributes, $values);
        echo "Updated category :: " . $category['name'] . "\n";
    }

    /**
     */
    private function updateCategories()
    {
        // randomly assign stores to categories

        $categories = Category::where('type', 1)
            ->with('stores')
            ->with('categories')
            ->get();

        $storeIdKey = 0;

        foreach ($categories as $category) {

            $name = \Illuminate\Support\Str::slug($category->name, ' ');
            $name = ucwords($name);

            $category->name = $name;

            echo "Updated category :: " . $category['name'] . "\n";

            if ($category->type == 1) {
                $stores = Store::inRandomOrder()->take(24)->get();

                if (!in_array($category->id, $this->storeCategories)) {
                    // randomise and get this out
                    $categoryId = $this->storeCategories[$storeIdKey];

                    if ($storeIdKey == count($this->storeCategories) - 1) {
                        $storeIdKey = 0;
                    } else {
                        $storeIdKey++;
                    }

                    $category->category_id = $categoryId;
                }
                else{
                    $category->category_id = null;
                }

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

            $category->has_stores = $category->stores->count() > 0;
            $category->has_categories = $category->categories->count() > 0;
            $category->save();
        }
    }
}
