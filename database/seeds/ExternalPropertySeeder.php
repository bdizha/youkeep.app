<?php

use App\External;

class ExternalPropertySeeder extends RipenfreshSeeder
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
        $externals = External::where('active', true)
            ->where('type', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        foreach ($externals as $external) {

            if (!empty($external->id)) {

                $url = 'https://www.property24.com/apartments-to-rent/sandton/gauteng/109';

                $crawler = Goutte::request('GET', $url);

                echo "Page: " . $url . " \n";

                $crawler->filter('.js_listingResultsContainer .p24_excerptLines2')->each(function ($node) use ($external) {

                    $pLink = $node->filter('a')->attr('href');

                    $externalUrl = $this->domain . $pLink;
                    $property = \App\Property::where('external_url', $externalUrl)->first();

                    $price = $node->filter('.p24_price')->text();

                    if (empty($property->id)) {
                        $property = new \App\Property();

                        echo 'Property link: ' . $externalUrl . " \n";

                        $property->external_url = $externalUrl;

                        $price = str_replace(' ', '', trim($price));

                        if ($node->filter('.p24_features span')->count() == 0 ||
                            $node->filter('.p24_features span')->count() == 0 || is_numeric($price)) {
                            $external->active = false;
                            $external->save();
                            echo 'Error occurred link: ' . $externalUrl . " \n";
                            die;
                        }
                        $property->monthly_price = trim(trim($price, 'R'));

                        $beds = $node->filter('.p24_features span')->eq(0)->text();
                        $baths = $node->filter('.p24_features span')->eq(1)->text();
                        $agencyNode = $node->filter('.js_agencyBrandingLink');

                        if ($agencyNode->count()) {
                            $agencyUrl = $agencyNode->attr('data-agencybrandinglink');

                            if (!empty($agencyUrl)) {
                                $agencyUrl = $this->domain . $agencyUrl;
                                $agency = \App\Agency::where('external_url', $agencyUrl)->first();

                                if (empty($agency->id)) {
                                    $agency = $this->setAgency($agencyUrl);
                                }

                                if($agency){
                                    $property->agency_id = $agency->id;

                                    echo "Property : " . $property->name . "\n";

                                    $data = unserialize($external->data);
                                    $data['agency_id'] = $agency->id;

                                    $external->data = serialize($data);

                                    $external->save();
                                }
                            }
                        }

                        $property->beds = str_slug($beds);
                        $property->baths = str_slug($baths);
                        $property->unit_number = 0;
                        $property->active = true;
                        $property->user_id = 1;

                        $attributes = [
                            'link' => $property->external_url,
                            'type' => 2
                        ];
                        $values = [
                            'active' => true,
                            'data' => serialize($property->toArray())
                        ];

                        External::firstOrCreate($attributes, $values);
                    } else {
                        $agencyNode = $node->filter('.js_agencyBrandingLink');

                        if ($agencyNode->count()) {
                            $agencyUrl = $agencyNode->attr('data-agencybrandinglink');

                            if (!empty($agencyUrl)) {
                                $agencyUrl = $this->domain . $agencyUrl;
                                $agency = \App\Agency::where('external_url', $agencyUrl)->first();

                                if (empty($agency->id)) {
                                    $agency = $this->setAgency($agencyUrl);
                                }

                                if($agency){
                                    $property->agency_id = $agency->id;

                                    echo "Property : " . $property->name . "\n";

                                    $data = unserialize($external->data);
                                    $data['agency_id'] = $agency->id;

                                    $external->data = serialize($data);

                                    $external->save();
                                    $property->save();
                                }
                            }
                        }
                    }
                });

                $external->active = false;
                $external->save();
            }

        }

        die('========' . date('Y-m-d H:i:s') . "=========\n");
    }
}