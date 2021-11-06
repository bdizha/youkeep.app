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
     * Find stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->method = '_setStores';
        return $this->_setParams($request);
    }

    /**
     * Find category stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request)
    {
        $this->method = '_setSellers';
        return $this->_setParams($request);
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
        $this->slug = $slug;
        $this->method = '_setStore';
        return $this->_setParams($request);
    }

    /**
     * Find  banners
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function catalogMap(Request $request)
    {
        $this->limit = $request->get('limit', 24);

        $key = $this->_setParams($request);

        if (Cache::has($key)) {
            $this->response = Cache::get($key, []);
        } else {
            $this->_setCatalogMap();
            $this->response['catalog_map'] = $this->catalogMap;

            Cache::put($key, $this->response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($this->response, 200);
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
