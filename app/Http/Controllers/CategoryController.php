<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Store;
use App\StoreCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    protected $without = ['categories', 'category', 'filters', 'store', 'products', 'breadcrumbs'],
        $relations = ['categories', 'store', 'stores'],
        $with = [];

    /**
     * Find categories
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $level = 1;
        $response = [];
        $this->limit = $request->get('limit', 24);

        $this->_setLevel($request, $level);

        $this->orderBy = $request->get('order_by', 'randomized_at');
        $this->with = $request->get('with', []);
        $this->categoryType = $request->get('type', 2);
        $this->categoryId = $request->get('category_id', null);
        $this->storeId = $request->get('store_id', null);
        $this->storeSlug = $request->get('store', null);
        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $this->_setCategories();
            $response['categories'] = $this->categories;
            $response['store'] = $this->store;

            Cache::put($key, $response, now()->addMinutes(3600));
        }

        return response()->json($response, 200);
    }

    /**
     * Return category values
     *
     * @param String $slug
     * @param String $level
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug = null, $level = 1)
    {
        $response = [];
        $this->slug = $request->get('slug', $slug);

        $this->categoryType = $request->get('type', 2);
        $this->storeId = $request->get('store_id', null);
        $this->limit = $request->get('limit', 24);
        $this->orderBy = $request->get('order_by', 'randomized_at');
        $this->with = $request->get('with', []);
        $this->_setLevel($request, $level);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $this->_setCategories();
            $this->_setProducts();
            $this->_setBreadcrumbs();

            $response['categories'] = $this->categories;
            $this->category['products'] = [];
            $response['category'] = $this->category;
            $response['products'] = $this->products;
            $response['store'] = $this->store;

            Cache::put($key, $response, now()->addMinutes(3600));
        }

        return response()->json($response, 200);
    }

    /**
     * Return store categories
     *
     * @param Request $request
     * @param String $slug
     * @param String $category
     * @param String $level
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $store = null, $slug = null, $level = 1)
    {
        $response = [];
        $this->slug = $request->get('slug', $slug);
        $this->storeSlug = $request->get('store', $store);
        $this->_setLevel($request, $level);

        $this->categoryType = $request->get('type', 2);
        $this->storeId = $request->get('store_id', null);
        $this->limit = $request->get('limit', 24);
        $this->orderBy = $request->get('order_by', 'randomized_at');
        $this->with = $request->get('with', []);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $this->_setCategories();
            $this->_setProducts();

            $response['categories'] = $this->categories;
            $response['category'] = $this->category;
            $response['products'] = $this->products;
            $response['store'] = $this->store;

            Cache::put($key, $response, now()->addMinutes(3600));
        }

        return response()->json($response, 200);
    }

    /**
     * Find stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function stores($request)
    {
        $response = [];
        $this->categoryId = $request->get('category_id', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $query = Store::where('is_active', true);

            $query->whereHas('categories', function ($query) {
                if (!is_null($this->categoryId)) {
                    $query->where('parent_id', $this->categoryId);
                }
            });

            if (!empty($this->limit)) {
                $query->limit($this->limit);
            }

            $this->items = $query
                ->orderBy('created_at', 'DESC')
                ->get()->toArray();

            $response['stores'] = $this->_pruneRelations($this->items);

            Cache::put($key, $response, now()->addMinutes(3600));
        }

        return response()->json($response, 200);
    }

    /**
     * @param Request $request
     * @param string $level
     */
    private function _setLevel(Request $request, string $level): void
    {
        $level = $request->get('level', $level);
        $this->level = (integer)$this->_decodeLevel($level);
    }
}
