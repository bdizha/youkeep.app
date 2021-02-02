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
    protected $without = ['categories', 'category', 'store', 'products', 'filters', 'breadcrumbs'],
        $relations = ['categories', 'store', 'stores'],
        $with = [],
        $slug = null,
        $categoryId = null,
        $orderBy = null,
        $breadcrumbs = [],
        $categoryType = null,
        $storeId = null,
        $storeSlug = null,
        $product = [],
        $category = [],
        $storeCategory = [],
        $store = [],
        $limit = [],
        $level = [],
        $items = [],
        $item = [];

    /**
     * Find categories
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = [];
        $this->limit = $request->get('limit', 24);

        $level = $request->get('level', 1);
        $this->level = $this->_decodeLevel($level);

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

            Cache::put($key, $response, now()->addMinutes(15));
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
    public function show($slug = null, $level = 1, Request $request)
    {
        $response = [];
        $this->slug = $request->get('slug', $slug);
        $level = $request->get('level', $level);
        $this->level = $this->_decodeLevel($level);

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

            $response['categories'] = $this->categories;
            $response['category'] = $this->category;

            Cache::put($key, $response, now()->addMinutes(45));
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
     * @return array
     */
    protected function _setCategoryStores()
    {
        foreach ($this->categories as $key => $category) {
            $this->storeCategory = Category::with('stores')
                ->where('id', $category['id'])
                ->first();

            $this->categories[$key]['stores'] = $this->storeCategory->stores;
        }
    }

    /**
     * @return void
     */
    protected function _setBreadcrumbs()
    {
        $this->breadcrumbs = !empty($this->storeCategory->breadcrumbs) ? $this->storeCategory->breadcrumbs : [];
        $this->category['breadcrumbs'] = $this->breadcrumbs;
    }

    /**
     * @return void
     */
    protected function _setRoutes(): void
    {
        $this->categories = array_map(function ($category) {
            $category['route'] .= $this->_encodeLevel();
            $category['level'] = $this->level + 1;
            return $category;
        }, $this->categories);
    }

    /**
     */
    private function _setCategories(): void
    {
        if (!empty($this->slug)) {
            $this->category = Category::where('slug', $this->slug)
                ->first();
        }

        if (!empty($this->categoryId)) {
            $this->category = Category::where('id', $this->categoryId)
                ->first();
        }

        if (!empty($this->category->id)) {
            $this->storeCategory = StoreCategory::where('category_id', $this->category->id)
                ->where('level', $this->level)
                ->first();
        }

        if (!empty($this->storeSlug)) {
            $this->store = Store::where('slug', $this->storeSlug)
                ->first();
        }

        $this->with = array_intersect($this->with, $this->relations);

        $query = Category::with($this->with)
            ->take($this->limit);

        $this->category['level'] = $this->level;
        $query->whereHas('stores', function ($query) {
            if (!empty($this->storeCategory)) {
                $query->where('parent_id', $this->storeCategory->id);
            }

            if (!empty($this->level)) {
                $query->where('level', $this->level + 1);
            }

            if ($this->categoryType == Category::TYPE_CATALOG) {
                $query->where('store_categories.has_products', true);
            }

            if (!empty($this->store->id)) {
                $query->where('store_categories.store_id', $this->store->id);
            }
        });

        $query->orderBy($this->orderBy, 'DESC');

        $this->categories = $query
            ->get()
            ->toArray();

        $this->_setRoutes();
        $this->_setBreadcrumbs();

        if ($this->categoryType === Category::TYPE_STORE) {
            $this->_setCategoryStores();
        }

        $this->categories = $this->_pruneRelations($this->categories);
    }
}
