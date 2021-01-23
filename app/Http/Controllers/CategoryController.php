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
        $categoryId = null,
        $orderBy = null,
        $breadcrumbs = [],
        $categoryType = null,
        $storeId = null,
        $product = [],
        $category = [],
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
        $category = null;

        $this->limit = $request->get('limit', 24);
        $this->level = $request->get('level', 1);
        $this->orderBy = $request->get('order_by', 'store_categories.created_at');

        $this->with = $request->get('with', []);

        $this->categoryType = $request->get('type', 2);
        $slug = $request->get('category', null);
        $this->categoryId = $request->get('category_id', null);
        $this->storeId = $request->get('store_id', null);
        $storeSlug = $request->get('store', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $query = Category::limit($this->limit)
                ->with('stores')
                ->has('stores')
                ->where('type', $this->categoryType);

            if (!is_null($slug)) {
                $category = Category::where('slug', $slug)
                    ->first();

                if (!empty($category->id)) {
                    $this->categoryId = $category->id;
                }
            }

            $query->whereHas('stores', function ($query) use ($storeSlug) {
                if (!is_null($storeSlug)) {
                    $query->where('stores.slug', $storeSlug);
                }

                if (!is_null($this->categoryId)) {
                    $query->where('parent_id', $this->categoryId);
                }

                if (!is_null($this->storeId)) {
                    $query->where('store_categories.store_id', $this->storeId);
                }

                if ($this->categoryType == Category::TYPE_CATALOG) {
//                    $query->where('store_categories.has_products', true);
                }

                if (!is_null($this->level)) {
                    $query->where('store_categories.level', $this->level);
                }

                $query->orderBy($this->orderBy, 'DESC');
                $query->orderBy('store_categories.product_count', 'DESC');
            });

            if (!empty($this->with)) {
                $query->with(array_intersect($this->with, $this->relations));
            }

            if (!empty($this->limit)) {
                $query->limit($this->limit);
            }

            $categories = $query->get()
                ->toArray();

            $categories = $this->_pruneRelations($categories);

            if ($this->categoryType === Category::TYPE_STORE) {
                $this->_setCategoryStores($categories);
            }

            if (false && !empty($this->with['products'])) {
                foreach ($categories as $category) {
                    $this->categoryId = $category->id;
                    $this->setProducts();
                    $categories['products'] = $this->products;
                }
            }

            $response['categories'] = $categories;
            $response['category'] = $category;

            Cache::put($key, $response, now()->addMinutes(3600));
        }

        return response()->json($response, 200);
    }

    /**
     * Return category values
     *
     * @param String $slug
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($slug = null, Request $request)
    {
        $response = [];
        $categories = [];
        $this->slug = $request->get('slug', $slug);
        $this->level = $request->get('level', null);
        $this->storeId = $request->get('store_id', 7);
        $this->limit = $request->get('limit', 24);
        $this->orderBy = $request->get('order_by', 'store_categories.created_at');
        $this->with = $request->get('with', []);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {

            $with = array_intersect($this->with, $this->relations);
            $category = Category::with($with)
                ->where('slug', $this->slug)->first();

            $query = Category::with($with);

            if (!empty($this->limit)) {
                $query->limit($this->limit);
            }

            if(!empty($category)){
                $storeCategory = StoreCategory::with($with)
                    ->where('category_id', $category->id)
                    ->where('store_id', $this->storeId)
                    ->first();
            }

            if (!empty($storeCategory)) {
                $category['products'] = [];
                $query->whereHas('stores', function ($query) use ($storeCategory) {
                    if (!is_null($this->level)) {
//                        $query->where('store_categories.level', $this->level);
                    }

                    $query->where('parent_id', $storeCategory->id);

                    $query->orderBy($this->orderBy, 'DESC');
                    $query->orderBy('product_count', 'DESC');
                });

                $categories = $query
                    ->take($this->limit)
                    ->get()
                    ->toArray();

                if ($category->type === Category::TYPE_STORE) {
                    $this->_setCategoryStores($categories);
                }

                $this->category = $category->toArray();

                $this->_setBreadcrumbs();

                $categories = $this->_pruneRelations($categories);
            }
            $response['categories'] = $categories;
            $response['category'] = $this->category;

            Cache::put($key, $response, now()->addMinutes(1));
        }

        return response()->json($response, 200);
    }

    /**
     * Find stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function stores($request)
    {
        $response = [];
        $this->categoryId = $request->get('category_id', null);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $query = Store::where('is_active', true);

//            $this->without = ['categories'];

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
     * @param array $categories
     * @return array
     */
    private function _setCategoryStores(array &$categories)
    {
        foreach ($categories as $key => $category) {
            $storeCategory = Category::with('stores')
                ->where('id', $category['id'])
                ->first();

            $categories[$key]['stores'] = $storeCategory->stores;
        }
    }

    /**
     * @return void
     */
    private function _setBreadcrumbs()
    {
        $storeCategory = StoreCategory::where('category_id', $this->category['id'])
            ->first();

        $this->breadcrumbs = !empty($storeCategory->breadcrumbs) ? $storeCategory->breadcrumbs : [];
        $this->category['breadcrumbs'] = $this->breadcrumbs;
    }
}
