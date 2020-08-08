<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\PropertyAmenity;
use App\Amenity;
use App\City;
use App\Suburb;
use App\External;

class ExternalSeeder extends Seeder
{
    protected $domain = 'https://www.property24.com';

    const TYPE_APARTMENT = 1;
    CONST TYPE_HOUSE = 2;
    CONST TYPE_TOWNHOUSE = 3;
    CONST TYPE_DUPLEX = 4;
    CONST TYPE_LOFT = 5;
    CONST TYPE_ROOM = 6;

    public static $types = [
        self::TYPE_APARTMENT => 'Apartment',
        self::TYPE_HOUSE => 'House',
        self::TYPE_TOWNHOUSE => 'Townhouse',
        self::TYPE_DUPLEX => 'Duplex',
        self::TYPE_LOFT => 'Loft',
        self::TYPE_ROOM => 'Room'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'https://www.property24.com/apartments-to-rent/cape-town/western-cape/432',
            'https://www.property24.com/apartments-to-rent/durbanville/western-cape/439',
            'https://www.property24.com/apartments-to-rent/midrand/gauteng/16',
            'https://www.property24.com/apartments-to-rent/somerset-west/western-cape/390',
            'https://www.property24.com/apartments-to-rent/strand/western-cape/392',
            'https://www.property24.com/apartments-to-rent/stellenbosch/western-cape/459',
            'https://www.property24.com/apartments-to-rent/johannesburg/gauteng/100',
            'https://www.property24.com/apartments-to-rent/centurion/gauteng/3',
            'https://www.property24.com/apartments-to-rent/randburg/gauteng/8',
            'https://www.property24.com/apartments-to-rent/sandton/gauteng/109',
            'https://www.property24.com/apartments-to-rent/pretoria/gauteng/1',
            'https://www.property24.com/apartments-to-rent/soweto/gauteng/102',
            'https://www.property24.com/apartments-to-rent/alberton/gauteng/19',
            'https://www.property24.com/apartments-to-rent/bellville/western-cape/441',
        ];

        foreach ($cities as $url) {
            $crawler = Goutte::request('GET', $url);

            echo $url . " \n";

            $pagerNode = $crawler->filter('.p24_results .panel-default .pull-right .p24_bold')->eq(1);

            $totalProperties = $pagerNode->text();

            $totalProperties = trim($totalProperties);
            $totalPages = ceil($totalProperties / 20);

            // count total page
            foreach (range(1, min($totalPages, 20)) as $page) {
                echo "Page: " . $url . '/p' . $page . " \n";

                $attributes = [
                    'link' => $url . '/p' . $page,
                    'type' => 1
                ];
                $values = [
                    'active' => true
                ];

                External::firstOrCreate($attributes, $values);
            }
        }

        die('Well done Ripenfresh...');
    }
}