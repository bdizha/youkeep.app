<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MetricController extends Controller
{

    /**
     * Find metrics by params
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->appId = $request->get('app_id', env('APP_ID'));
        $this->productType = $request->get('type', 1);
        $this->limit = $request->get('limit', 12);
        $this->categoryId = $request->get('category_id', null);
        $this->storeId = $request->get('store_id', null);
        $this->productId = $request->get('product_id', null);
        $this->filters = $request->get('filters', []);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->setMetrics();

            $response['metric_types'] = $this->metricTypes;
            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }
}
