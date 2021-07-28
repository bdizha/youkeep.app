<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AddressController extends Controller
{
    public function countries(Request $request){

        $this->limit = null;
        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->_setCountries();

            $response = $this->countries;
            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }
}
