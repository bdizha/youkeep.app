<?php

use App\Province;
use App\PropertyAmenity;
use App\Amenity;
use App\City;
use App\Suburb;
use App\External;
use App\PropertyPhoto;
use Illuminate\Support\Facades\Storage;

class PropertySeeder extends RipenfreshSeeder
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
        $external = External::where('externals.active', true)
            ->leftJoin('properties', 'properties.external_url', '=', 'externals.link')
            ->select('externals.*')
            ->where('externals.type', 2)
            ->whereNull('properties.type')
            ->orderBy('externals.updated_at', 'ASC')
            ->first();

        try {

            $externalUrl = $external->link;

            echo $externalUrl . " \n";

            if (!empty($external->id)) {
                $crawler = Goutte::request('GET', $externalUrl);

                $province = new \App\Province();
                $city = new \App\City();
                $suburb = new \App\Suburb();

                $property = \App\Property::where('external_url', $externalUrl)->first();

                if (empty($property->id)) {
                    $property = new \App\Property(unserialize($external->data));
                }

                $crawler->filter('.col-xs-9 .p24_breadCrumb li a')->each(function ($n1, $key) use (&$property, &$province, &$city, &$suburb) {
                    $name = $n1->text();
                    if ($key == 1) {
                        $province = Province::where('name', $name)->first();
                        $property->province_id = $province->id;
                    }

                    if ($key == 2) {
                        $attributes = [
                            'name' => $name,
                            'province_id' => $province->id
                        ];
                        $values = [];

                        $city = City::firstOrCreate($attributes, $values);
                        $property->city_id = $city->id;
                        $property->address = $name;
                    }

                    if ($key == 3) {
                        $attributes = [
                            'name' => $name,
                            'city_id' => $city->id
                        ];
                        $values = [];

                        $suburb = Suburb::firstOrCreate($attributes, $values);
                        $property->suburb_id = $suburb->id;

                        $property->address .= ", " . $name;
                    }
                });

                $amenities = [];
                $photos = [];

                $name = $crawler->filter('.p24_listingPanel .pull-left h1')->text();
                $summary = $crawler->filter('.p24_listing .p24_listingPanel .col-xs-9 .p24_details h5')->text();
                $description = $crawler->filter(".js_readMoreText")->html();

                $property->name = trim($name);
                $property->summary = trim($summary);
                $property->description = trim($description);

                // map data
                $crawler->filter('script[type="text/javascript"]')->each(function ($scriptNode) use ($property) {
                    if (strpos($scriptNode->text(), 'model = ') != false) {

                        $scriptText = $scriptNode->text();

                        $scriptText = str_replace('$(function () {', '', $scriptText);
                        $scriptText = str_replace('var ', '', $scriptText);

                        $scriptTextParts = explode(';', $scriptText);

                        if (!empty($scriptTextParts[0]) && strpos($scriptTextParts[0], 'model = ') != false) {

                            $scriptTextParts = explode(',', $scriptText);

                            foreach (['latitude', 'longitude'] as $key) {
                                foreach ($scriptTextParts as $part) {
                                    if (strpos($part, $key) != false) {
                                        $valueParts = explode(':', $part);
                                        $property->$key = !empty($valueParts[1]) ? trim($valueParts[1]) : '';
                                    }

                                }
                            }
                        }

                    }
                });

                // set agency
                $agencyNode = $crawler->filter('.p24_agency');

                if ($agencyNode->count()) {
                    $agencyUrl = $this->domain . $agencyNode->filter('a')->attr('href');
                    $agencyUrl = str_replace('to-rent/agency', 'estate-agents', $agencyUrl);

                    $agency = \App\Agency::where('external_url', $agencyUrl)->first();

                    if (empty($agency->id)) {
                        $agency = $this->setAgency($agencyUrl);
                    }

                    if ($agency) {
                        $property->agency_id = $agency->id;

                        // set user
                        $photoNode = $crawler->filter('.p24_agentPhoto');
                        if ($photoNode->count()) {

                            try {
                                $photo = $external->id . time() . str_pad(1, 2, '0', STR_PAD_LEFT) . '.jpg';

                                if ($photoNode->filter('img')->attr('src')) {
                                    $photoUrl = $photoNode->filter('img')->attr('src');

                                    if ($photoNode->filter('span')->count) {
                                        $fullName = $photoNode->filter('span')->text();

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
                                            'type' => 2
                                        ];

                                        $user = User::updateOrCreate($attributes, $values);

                                        $property->user_id = $user->id;
                                    }
                                }

                            } catch (Exception $e) {

                            }

                        }
                    }
                }

                $crawler->filter('.p24_features .row')->each(function ($node) use ($property, &$amenities) {
                    $label = $node->filter('.col-xs-4')->text();
                    $value = $node->filter('.col-xs-8')->text();

                    if ($label == 'Type of Property') {
                        if (strpos($value, 'Apartment') != false) {
                            $property->type = 1;
                        }
                    }

                    if ($label == 'Street Address') {
                        if (!empty($value)) {
                            $property->address = trim($value);
                        }
                    }

                    if ($label == 'Lifestyle') {
                        $property->lifestyle = trim($value);

                        if (strpos($value, 'Student') != false) {
                            $amenity = Amenity::where('slug', 'student-friendly')->first();
                            if (!empty($amenity->id)) {
                                $amenities[] = $amenity->id;
                            }
                        }
                    }

                    if ($label == 'Furnished') {
                        if (trim($value) == 'Yes') {
                            $amenity = Amenity::where('slug', 'furnished')->first();
                            if (!empty($amenity->id)) {
                                $amenities[] = $amenity->id;
                            }
                        }
                    }

                    if ($label == 'Occupation Date') {
                        $property->available_from = date('Y-m-d', strtotime($value));
                        $property->expire_at = date('Y-m-d h:i:s', strtotime($value . ' 3 months'));
                    }

                    if ($label == 'Floor Size') {
                        $property->space = str_slug(str_replace(' m²', '', $value));
                    }

                    if ($label == 'Pets Allowed') {
                        $property->pets_allowed = trim($value) == 'Yes';
                    }

                    if ($label == 'Deposit Requirements') {
                        $security_deposit = str_replace('Deposit Required: R', '', $value);
                        $security_deposit = str_replace('Deposit amount R', '', $value);

                        if (is_numeric($security_deposit)) {
                            $property->security_deposit = trim(str_replace(',', '', $security_deposit));
                        }
                    }

                    if ($label == 'Parking') {
                        $property->parking = is_numeric(trim($value)) ? trim($value) : 1;

                        $amenity = Amenity::where('slug', 'parking-spot')->first();
                        if (!empty($amenity->id)) {
                            $amenities[] = $amenity->id;
                        }
                    }

                    if ($label == 'Garden') {
                        $amenity = Amenity::where('slug', 'garden')->first();
                        if (!empty($amenity->id)) {
                            $amenities[] = $amenity->id;
                        }
                    }

                    if ($label == 'Pool') {
                        if (trim($value) == 'Yes') {
                            $amenity = Amenity::where('slug', 'pool')->first();
                            if (!empty($amenity->id)) {
                                $amenities[] = $amenity->id;
                            }
                        }
                    }

                    if ($label == 'Number of floors') {
                        if (trim($value)) {
                            $amenity = Amenity::where('slug', 'high-rise')->first();
                            if (!empty($amenity->id)) {
                                $amenities[] = $amenity->id;
                            }
                        }
                    }

                    if ($label == 'Facing') {
                        if (trim($value)) {
                            $amenity = Amenity::where('slug', 'view')->first();
                            if (!empty($amenity->id)) {
                                $amenities[] = $amenity->id;
                            }
                        }
                    }

                    if ($label == 'Wheelchair Accessible') {
                        if (trim($value) == 'Yes') {
                            $amenity = Amenity::where('slug', 'wheelchair-accessible')->first();
                            if (!empty($amenity->id)) {
                                $amenities[] = $amenity->id;
                            }
                        }
                    }
                });

                if (!empty($property->address)) {
                    $property->save();

                    $crawler->filter('.p24_gallery img.lazyImageLoading')->each(function ($photoNode, $key) use ($property, &$photos) {
                        $photo = $property->id . str_pad($key, 12, '0', STR_PAD_LEFT) . '.jpg';

                        if ($photoNode->attr('lazy-src')) {
                            $photoUrl = $photoNode->attr('lazy-src');
                        } else {
                            $photoUrl = $photoNode->attr('src');
                        }

                        echo "File name: " . $photo . "\n";
                        echo "lazy-src: " . $photoNode->attr('lazy-src') . "\n";

                        Storage::disk('property')->put($photo, file_get_contents($photoUrl));

                        $attributes = [
                            'property_id' => $property->id,
                            'photo' => $photo
                        ];

                        $propertyPhoto = new PropertyPhoto($attributes);
                        $propertyPhoto->save();
                    });

                    PropertyAmenity::where('property_id', $property->id)
                        ->delete();

                    foreach ($amenities as $amenityId) {
                        $attributes = [
                            'amenity_id' => $amenityId,
                            'property_id' => $property->id
                        ];

                        $values = [
                        ];

                        PropertyAmenity::updateOrCreate($attributes, $values);
                    }

                    echo "Inserting property >>> " . $property->name . " : {$property->id}" . "\n";
                } else {
                    echo "Skipping property >>> " . $property->external_url . "\n";
                }

                $external->active = false;
                $external->save();
            }

        } catch (Exception $e) {
            $external->active = false;
            $external->save();
            $external->active = true;
            $external->save();
            die('failed...');
        }

        die('========' . date('Y-m-d H:i:s') . "=========\n");
    }
}