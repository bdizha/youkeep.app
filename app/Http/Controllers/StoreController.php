<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StoreController extends Controller
{
    protected $relations = ['categories', 'products', 'category', 'store'],
        $without = ['categories', 'products', 'category', 'breadcrumbs', 'store'];
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

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->_setStores();
            $response['stores'] = $this->stores;

            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }

    /**
     * Find category stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request)
    {
        $this->limit = $request->get('limit', 120);
        $this->term = $request->get('term', null);

        $this->categoryId = $request->get('category_id', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $this->_setSellers();
            $response = $this->stores;

            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }

    /**
     * Show store details
     *
     * @param String $slug
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug, Request $request)
    {
        $key = $this->_setCacheKey($request);
        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $store = Store::where('slug', $slug)
                ->first();

            session(['store' => $store]);

            $this->storeId = $store->id;

            $response = [
                'store' => $store
            ];

            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }

    /**
     * Find  banners
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function catalogMap(Request $request)
    {
        $response = [];
        $this->limit = $request->get('limit', 24);

        $key = $this->_setParams($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $this->_setCatalogMap();
            $response['catalog_map'] = $this->catalogMap;

            Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }

    public function search(Request $request)
    {
        $term = $request->get('term', 24);
        $user = User::where('name', 'LIKE', '%' . $term . '%')
            ->orWhere('description', 'LIKE', '%' . $term . '%')->get();

        if (count($user) > 0)
            return view('welcome')->withDetails($user)->withQuery($q);
        else
            return view('welcome')->withMessage('No Details found. Try to search again !');
    }
}
