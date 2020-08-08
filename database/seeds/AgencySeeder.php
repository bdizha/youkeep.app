<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\City;
use App\Suburb;
use App\Agency;
use App\User;
use App\AgencyLocation;

class AgencySeeder extends Seeder
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
            'Western Cape' => 9,
            'KwaZulu Natal' => 2,
            'Eastern Cape' => 7,
            'North West' => 6,
            'Mpumalanga' => 5,
            'Free State' => 3,
            'Limpopo' => 14,
            'Northern Cape' => 8,
        ];

        $url = 'https://www.property24.com/estate-agencies/gauteng/';

        foreach ($provinces as $p => $id) {
            $crawler = Goutte::request('GET', $url . $id);

            $province = Province::where('name', $p)->first();

            $crawler->filter('.js_resultsTopAreas .p24_bold')->each(function ($node) use ($province) {
                $name = $node->text();

                $attributes = [
                    'name' => $name,
                    'province_id' => $province->id
                ];
                $values = [];

                $city = City::firstOrCreate($attributes, $values);

                if (true) {
                    $url = str_replace('estate-agencies', 'estate-agencies/all-suburbs', $node->attr('href'));

                    $crawler = Goutte::request('GET', $this->domain . $url);
                    $crawler->filter('.p24_multiple .checkbox')->each(function ($node) use ($province, $city) {

                        $name = $node->filter('a')->text();
                        if (!empty($name)) {
                            $attributes = [
                                'name' => $name,
                                'city_id' => $city->id
                            ];
                            $values = [];

                            $suburb = Suburb::firstOrCreate($attributes, $values);

                            $url = $node->filter('a')->attr('href');
                            $crawler = Goutte::request('GET', $this->domain . $url);

                            $pagerNode = $crawler->filter('.p24_results .panel-default .pull-right .p24_bold')->eq(1);

                            $totalAgencies = $pagerNode->text();

                            $totalAgencies = trim($totalAgencies);
                            $totalPages = ceil($totalAgencies / 20);

                            // count total page
                            foreach (range(1, $totalPages) as $page) {
                                $crawler = Goutte::request('GET', $this->domain . $url . '/p' . $page);

                                $crawler->filter('.p24_results .panel-default .row')->each(function ($node) use ($province, $city, $suburb) {

                                    $url = $node->filter('.p24_bold a')->attr('href');

                                    $externalUrl = $this->domain . $url;

                                    $crawler = Goutte::request('GET', $externalUrl);

                                    $node = $crawler->filter('.p24_results .container');

                                    $nameNode = $node->filter('h1');
                                    $addressNode = $node->filter('#google-map img');
                                    $photoNode = $node->filter('.p24_agencyName img');

                                    if ($nameNode->count() > 0) {

                                        $attributes = [
                                            'name' => $nameNode->count() ? $nameNode->text() : '',
                                            'address' => $addressNode->count() ? $addressNode->attr('alt') : '',
                                        ];
                                        $values = [
                                            'active' => true,
                                            'external_url' => $externalUrl
                                        ];

                                        $agency = Agency::updateOrCreate($attributes, $values);

                                        // TODO remove this comment when all the links are in place

//                                        if ($photoNode->count() > 0) {
//                                            $photo = $agency->slug . '.jpg';
//                                            $agency->photo = $photo;
//
//                                            Storage::disk('agency')->put($photo, file_get_contents($photoNode->attr('src')));
//
//                                            $agency->save();
//                                        }
//
//                                        // map data
//                                        $crawler->filter('script[type="text/javascript"]')->each(function ($scriptNode) use ($agency) {
//                                            if (strpos($scriptNode->text(), 'options = ') != false) {
//
//                                                $scriptText = $scriptNode->text();
//
//                                                $scriptText = str_replace('$(function () {', '', $scriptText);
//                                                $scriptText = str_replace('var ', '', $scriptText);
//
//                                                $scriptTextParts = explode(';', $scriptText);
//
//                                                if (!empty($scriptTextParts[0]) && strpos($scriptTextParts[0], 'options = ') != false) {
//
//                                                    $scriptTextParts = explode(',', $scriptText);
//
//                                                    foreach (['latitude', 'longitude'] as $key) {
//                                                        foreach ($scriptTextParts as $part) {
//                                                            if (strpos($part, $key) != false) {
//                                                                $valueParts = explode(':', $part);
//                                                                $agency->$key = !empty($valueParts[1]) ? trim($valueParts[1]) : '';
//                                                            }
//
//                                                        }
//                                                    }
//
//                                                    $agency->save();
//                                                }
//
//                                            }
//                                        });
//
//                                        $attributes = [
//                                            'agency_id' => $agency->id,
//                                            'province_id' => $province->id,
//                                            'city_id' => $city->id,
//                                            'suburb_id' => $suburb->id
//                                        ];
//
//                                        $values = [
//                                        ];
//
//                                        AgencyLocation::updateOrCreate($attributes, $values);

                                        echo $province->slug . ' >>> ' . $city->slug . ' >>> ' . $suburb->slug . ' >>> ' . $agency->slug . "\n";

                                        $crawler->filter('.p24_pB0 .p24_agentThumb')->each(function ($userNode, $key) use ($agency) {

                                            try {
                                                $photo = $agency->id . time() . str_pad($key, 2, '0', STR_PAD_LEFT) . '.jpg';

                                                if ($userNode->filter('img')->attr('src')) {
                                                    $photoUrl = $userNode->filter('img')->attr('src');

                                                    if ($userNode->filter('img')->attr('src')) {
                                                        $fullName = $userNode->filter('img')->attr('alt');
                                                        $url = $userNode->filter('a')->attr('href');

                                                        $externalUrl = $this->domain . $url;

                                                        $email = str_slug($fullName) . '@' . $agency->slug . '.co.za';

                                                        $email = str_replace('-', '', $email);

                                                        Storage::disk('profile')->put($photo, file_get_contents($photoUrl));

                                                        $attributes = [
                                                            'agency_id' => $agency->id,
                                                            'name' => $fullName,
                                                            'email' => $email,
                                                        ];

                                                        $values = [
                                                            'photo' => $photo,
                                                            'password' => bcrypt($email),
                                                            'type' => 2,
                                                            'external_url' => $externalUrl
                                                        ];

                                                        User::updateOrCreate($attributes, $values);
                                                    }
                                                }

                                            } catch (Exception $e) {

                                            }
                                        });
                                    }
                                });
                            }
                        }
                    });
                }
            });

        }

        die('Well done Ripenfresh...');
    }
}
