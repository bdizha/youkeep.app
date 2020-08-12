<?php

use Illuminate\Database\Seeder;
use App\Category;

class categorieseeder extends Seeder
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
                'name' => "Recommended for you"
            ],
            [
                'name' => "New stores around you"
            ],
        ];
        foreach ($this->categories as $category) {
            $this->setCategory($category);
        }
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
            "level" => 0
        ];

        $category = \App\Category::updateOrCreate($attributes, $values);

        echo "Updated category :: " . $category['name'] . "\n";
    }
}
