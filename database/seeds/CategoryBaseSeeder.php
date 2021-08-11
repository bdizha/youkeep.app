<?php

use Illuminate\Database\Seeder;

class CategoryBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storeId = 0;
        $order = 1;

        $crawler = Goutte::request('GET', 'http://Graphigem.local/import-base-categories');
        $crawler->filter('.esg-filterbutton')->each(function ($node) use ($order, $storeId) {

            if ($node->filter('span')->eq(1)->count()) {
                $name = $node->filter('span')->eq(1)->text();
                $name = preg_replace("/[^A-Za-z0-9 ]/", ' ', $name);

                $name = preg_replace('/\s+/', ' ', $name);

                $values = [
                    'store_id' => $storeId,
                    'name' => ucwords(strtolower($name)),
                    'order' => $order,
                    'level' => 0,
                    'description' => 'More details coming soon.',
                ];

                $attributes = [
                    'level' => 0,
                    'name' => $name
                ];

                echo "Inserted category :: " . $name . "\n===================================\n";

                $category = \App\Category::updateOrCreate($attributes, $values);

                echo ">>>" . $category->name . "\n";
            } else {
                echo ">>>Skipped" . $node->filter('span')->text() . "\n";
            }
        });

        die("Well done.");
    }
}
