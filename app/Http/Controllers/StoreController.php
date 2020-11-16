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
        $this->limit = $request->get('limit', 24);
        $this->term = $request->get('term', null);

        $categoryId = $request->get('category_id', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {

            $query = Store::where('is_active', true);

            $this->without = ['categories'];

            if (!empty($this->term)) {
                $query->where('name', 'like', '%' . $this->term . '%');
            }

            if (!empty($categoryId)) {
                $query->where('category_id', $categoryId);
            }

            if (!empty($this->limit)) {
                $query->limit($this->limit);
            }

            $response = $query
                ->orderBy('created_at', 'DESC')
                ->paginate(18);

            Cache::put($key, $response, now()->addMinutes(15));
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
