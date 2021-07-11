<?php

namespace App\Http\Controllers;

use App\Category;
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
        $this->limit = $request->get('limit', 120);
        $this->term = $request->get('term', null);

        $this->categoryId = $request->get('category_id', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->_setStores();
            $response = $this->stores;



             Cache::put($key, $response, now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }

    /**
     * Show store details
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $store = Store::where('slug', $slug)
            ->first();

        session(['store' => $store]);

        return response()->json([
            'store' => $store,
            'status' => 'success'
        ], 200);
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
