<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RankingController extends Controller
{
    /**
     * @var mixed
     */
    private $term;

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
        $this->categoryId = $request->get('category_id', null);
        $this->sort = $request->get('sort', $this->sort);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->_setRankings();
            $response['rankings'] = $this->rankings;

            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }
}
