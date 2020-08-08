<?php

use Illuminate\Database\Seeder;
use App\Amenity;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        die(__NAMESPACE__);

        $crawler = Goutte::request('GET', 'http://Ripenfresh.local/about');

        $crawler->filter('.amenity-wrapper span')->each(function ($node) {

            $name = $node->text();

            if (!empty($name)) {
                $amenity = new Amenity(
                    [
                        'name' => $name
                    ]
                );

                echo $node->text() . "\n";
                $amenity->save();
            }
        });
        die("Well done.");
    }
}
