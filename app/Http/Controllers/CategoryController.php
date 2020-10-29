<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Store;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $without = ['categories', 'products', 'category', 'store'],
        $relations = ['categories', 'category', 'store', 'stores'],
        $with = [],
        $categoryId = null,
        $products = [],
        $limit = [],
        $level = [],
        $items = [],
        $item = [],
        $store = [];

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

        $this->limit = $request->get('limit', 12); // 6
        $this->level = $request->get('level', null);
        $orderBy = $request->get('order_by', 'created_at');

        $this->with = $request->get('with', []);

        $type = $request->get('type', 2);
        $slug = $request->get('category', null);
        $categoryId = $request->get('category_id', null);
        $storeId = $request->get('store_id', null);
        $storeSlug = $request->get('store', null);

        $query = Category::limit($this->limit)
            ->where('type', $type)
            ->where('store_id', '!=', 1);

        if (!is_null($storeId)) {
            $query->where('store_id', $storeId);
        }

        if (!is_null($slug)) {
            $category = Category::where('slug', $slug)
                ->first();

            if (!empty($category->id)) {
                $categoryId = $category->id;
            }
        }

        if (!is_null($storeSlug)) {
            $query->whereHas('store', function ($query) use ($storeSlug) {
                $query->where('stores.slug', $storeSlug);
            });
        }

        if (!is_null($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        if (!is_null($this->level)) {
            $query->where('level', $this->level);
        }

        if (!empty($this->with)) {
            $query->with(array_intersect($this->with, $this->relations));
        }

        if ($type !== 1) {
            $query->where('has_products', true);
        }

        if (!empty($this->limit)) {
            $query->limit($this->limit);
        }

        $categories = $query->orderBy($orderBy, 'DESC')
            ->get()
            ->toArray();

        if ($type === Category::TYPE_STORE) {
            $this->_setCategoryStores($categories);
        }

        $response['categories'] = $categories;
        $response['category'] = $category;

        return response()->json($response, 200);
    }

    /**
     * Return category values
     *
     * @param String $store
     * @param String $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $response = [];
        $this->slug = $request->get('category', null);
        $this->limit = $request->get('limit', 12);
        $this->with = $request->get('with', []);

        $category = Category::with($this->with)
            ->where('slug', $this->slug)->first();

        $query = Category::with($this->with);

        if (!empty($this->limit)) {
            $query->limit($this->limit);
        }
        $query->where('category_id', $category->id);

        $categories = $query
            ->take(12)
            ->get()->toArray();

        if ($category->type === Category::TYPE_STORE) {
            $this->_setCategoryStores($categories);
        }

        $category['categories'] = $categories;
        $response['category'] = $category;

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

        $categoryId = $request->get('category_id', null);

        $query = Store::where('is_active', true);

        $this->without = ['categories'];

        if (!is_null($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        if (!empty($this->limit)) {
            $query->limit($this->limit);
        }

        $this->items = $query
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $response['stores'] = $this->_pruneRelations($this->items);

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
}
