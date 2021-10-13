<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ServeController extends Controller
{

    /**
     * Find stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = [];
        $this->appId = $request->get('app_id', env('APP_ID'));
        $this->limit = $request->get('limit', 120);
        $this->term = $request->get('term', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->_setServes();
            $response['serves'] = $this->categories;

            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }
}
