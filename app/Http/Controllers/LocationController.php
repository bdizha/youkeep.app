<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    /**
     * Show the locations
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('locations');
    }

    /**
     * Do search
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    function lookup(Request $request)
    {
        $this->term = $request->get('term', null);

        // url encode the address
        $search = urlencode($this->term);

        // google map geocode api url
        $url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input={$search}&region=ZA&key=AIzaSyDL4vP5RF-zTA5whJnHNngaFuthrV6OVcM";

        // get the json response
        $resp_json = file_get_contents($url);

        // decode the json
        $resp = json_decode($resp_json, true);

        // response status will be 'OK', if able to geocode given address
        if ($resp['status'] == 'OK') {
            $predictions = $resp['predictions'];

            $addresses = [];

            foreach ($predictions as $prediction) {

                $description = !empty($prediction['description']) ? $prediction['description'] : null;

                if (!empty($description)) {
                    $addresses[] = [
                        'title' => $description,
                        'route' => urlencode($description),
                        'main_text' => !empty($prediction['structured_formatting']['main_text']) ? $prediction['structured_formatting']['main_text'] : null,
                        'secondary_text' => !empty($prediction['structured_formatting']['secondary_text']) ? $prediction['structured_formatting']['secondary_text'] : null,
                    ];
                }
            }

            return response()->json([
                'data' => $addresses,
                'status' => 'success'
            ], 200);

        } else {
            return response()->json([
                'data' => [],
                'status' => 'error',
                'error' => $resp['status']
            ], 200);
        }
    }

    /**
     * Find categories
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function address(Request $request)
    {
        $searchText = $request->get('route', null);
        $addressLine = $request->get('main_text', null);
        $streetNumber = $request->get('secondary_text', null);

        // google map geocode api url
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$searchText}&region=ZA&key=AIzaSyDL4vP5RF-zTA5whJnHNngaFuthrV6OVcM";

        // get the json response
        $resp_json = file_get_contents($url);

        // decode the json
        $resp = json_decode($resp_json, true);

        $address = new Address();
        $address['address_line'] = $addressLine;
        $address['street_number'] = $streetNumber;
        $address['is_default'] = true;

        // response status will be 'OK', if able to geocode given address
        if ($resp['status'] == 'OK') {
            $resultAddresses = $resp['results'];

            if (!empty($resultAddresses[0])) {
                foreach ($resultAddresses[0]['address_components'] as $addressLine) {
                    if (in_array('street_number', $addressLine['types'])) {
                        $address['street_number'] = $addressLine['short_name'] . ' ' . $address['street_number'];
                    }

                    if (in_array('route', $addressLine['types'])) {
                        $address['address_line_2'] = $addressLine['short_name'];
                    }

                    if (in_array('locality', $addressLine['types'])) {
                        $address['city'] = $addressLine['short_name'];
                    }

                    if (in_array('locality', $addressLine['types'])) {
                        $address['city'] = $addressLine['short_name'];
                        $address['suburb'] = $addressLine['short_name'];
                    }

                    if (in_array('postal_code', $addressLine['types'])) {
                        $address['postal_code'] = $addressLine['short_name'];
                    }

                    if (in_array('country', $addressLine['types'])) {
                        $address['country_name'] = $addressLine['short_name'];
                    }
                }
            }
        }

        $addresses = [];
        if (!empty($address)) {
            $values = $address->toArray();
            list($address, $addresses) = Controller::_setAddress($values);
        }

        $message = 'Your address has been successfully saved.';

        return response()->json([
            'address' => $address,
            'addresses' => $addresses,
            'message' => $message,
            'status' => 'success',
        ], 200);
    }
}
