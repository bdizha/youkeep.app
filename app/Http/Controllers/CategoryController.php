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

        $level = $request->get('level', 1);
        $this->level = $this->_decodeLevel($level);

        $this->orderBy = $request->get('order_by', 'product_count');

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
                $query->orderBy('store_categories.product_count', 'DESC');
            });

            $query->orderBy($this->orderBy, 'DESC');

            if (!empty($this->with)) {
                $query->with(array_intersect($this->with, $this->relations));
            }

            if (!empty($this->limit)) {
                $query->limit($this->limit);
            }

            $categories = $query->get()
                ->toArray();

            $categories = $this->_pruneRelations($categories);

            --$this->level;
            $this->_setCategoryRoute($categories);

            if ($this->categoryType === Category::TYPE_STORE) {
                $this->_setCategoryStores($this->categories);
            }

            if (false && !empty($this->with['products'])) {
                foreach ($this->categories as $category) {
                    $this->categoryId = $category->id;
                    $this->setProducts();
                    $categories['products'] = $this->products;
                }
            }

            $response['categories'] = $this->categories;
            $response['category'] = $category;

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
    public function show($slug = null, $level = 1, Request $request)
    {
        $response = [];
        $this->slug = $request->get('slug', $slug);
        $level = $request->get('level', $level);
        $this->level = $this->_decodeLevel($level);

        $this->storeId = $request->get('store_id', null);
        $this->limit = $request->get('limit', 24);
        $this->orderBy = $request->get('order_by', 'store_categories.created_at');
        $this->with = $request->get('with', []);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {
            $with = array_intersect($this->with, $this->relations);
            $this->category = Category::where('slug', $this->slug)->first();

            if (!empty($this->category)) {
                $storeCategory = StoreCategory::where('category_id', $this->category->id)
                    ->where('level', $this->level)
                    ->first();

                $query = Category::with($with)
                    ->take($this->limit);

                if (!empty($this->limit)) {
                    $query->limit($this->limit);
                }

                $this->category['level'] = $this->level + 1;

                if (!empty($storeCategory)) {
                    $query->whereHas('stores', function ($query) use ($storeCategory) {
                        $query->where('parent_id', $storeCategory->id);

                        if (!empty($this->level)) {
                            $query->where('level', $this->level + 1);
                        }

                        $query->orderBy($this->orderBy, 'DESC');
                        $query->orderBy('product_count', 'DESC');
                    });

                    $categories = $query
                        ->get()
                        ->toArray();

                    $this->_setCategoryRoute($categories);

                    if ($this->category->type === Category::TYPE_STORE) {
                        $this->_setCategoryStores($this->categories);
                    }

                    $this->_setBreadcrumbs();

                    $this->categories = $this->_pruneRelations($this->categories);
                }
                $response['categories'] = $this->categories;
                $response['category'] = $this->category;

                Cache::put($key, $response, now()->addMinutes(3600));
            }
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
     * @param array $categories
     * @return array
     */
    private
    function _setCategoryStores(array &$categories)
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
    private
    function _setBreadcrumbs()
    {
        $storeCategory = StoreCategory::where('category_id', $this->category['id'])
            ->first();

        $this->breadcrumbs = !empty($storeCategory->breadcrumbs) ? $storeCategory->breadcrumbs : [];
        $this->category['breadcrumbs'] = $this->breadcrumbs;
    }

    /**
     * @param array $categories
     */
    private function _setCategoryRoute(array $categories): void
    {
        $this->categories = array_map(function ($category) {
            $category['route'] .= $this->_encodeLevel();
            return $category;
        }, $categories);
    }
}
