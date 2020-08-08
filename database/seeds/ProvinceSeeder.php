<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\City;
use App\Suburb;

class ProvinceSeeder extends Seeder
{
    protected $domain = 'https://www.property24.com';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            'Gauteng' => 1,
            'KwaZulu Natal' => 2,
            'Western Cape' => 9,
            'Eastern Cape' => 7,
            'North West' => 6,
            'Mpumalanga' => 5,
            'Free State' => 3,
            'Limpopo' => 14,
            'Northern Cape' => 8,
        ];

        $url = 'https://www.property24.com/to-rent/all-cities/gauteng/';

        $provinceCounter = 1;
        foreach ($provinces as $p => $id) {
            $crawler = Goutte::request('GET', $url . $id);

            $attributes = [
                'name' => $p
            ];
            $values = [
                'is_main' => $provinceCounter < 4
            ];

            $province = Province::firstOrCreate($attributes, $values);

            ++$provinceCounter;

            $crawler->filter('.p24_multiple .checkbox')->each(function ($node) use ($province) {

                $cityCount = $node->filter('span')->text();

                $cityCount = trim(trim($cityCount), '(');
                $cityCount = trim($cityCount, ')');

                $name = $node->filter('a')->text();

                $attributes = [
                    'name' => $name,
                    'province_id' => $province->id
                ];
                $values = [
                    'property_count' => $cityCount
                ];

                $city = City::firstOrCreate($attributes, $values);

                $url = str_replace('to-rent', 'to-rent/all-suburbs', $node->filter('a')->attr('href'));

                $crawler = Goutte::request('GET', $this->domain . $url);

                $crawler->filter('.p24_multiple .checkbox')->each(function ($node) use ($province, $city) {

                    $name = $node->filter('a')->text();
                    $attributes = [
                        'name' => $name,
                        'city_id' => $city->id
                    ];
                    $values = [];

                    $suburb = Suburb::firstOrCreate($attributes, $values);

                    echo $province->slug . ' >>> ' . $city->slug . ' >>> ' . $suburb->slug . "\n";
                });
            });
        }

        die('Well done Ripenfresh...');
    }
}
