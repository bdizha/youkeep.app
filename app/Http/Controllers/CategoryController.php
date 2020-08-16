<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Store;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $without = ['categories', 'products', 'category', 'breadcrumbs', 'store'],
        $relations = ['categories', 'category', 'store'],
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
        $this->limit = $request->get('limit', 6);
        $this->level = $request->get('level', null);

        $this->with = $request->get('with', []);

        $categoryId = $request->get('category_id', null);
        $storeId = $request->get('store_id', null);
        $storeSlug = $request->get('store_slug', null);

        $query = Category::limit($this->limit)
            ->where('store_id', '!=', 1);

        if (!is_null($storeId)) {
            $query->where('store_id', $storeId);
            $store = Store::where('id', $storeId)->first();
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

        $query->where('has_products', true);

        if (!empty($this->limit)) {
            $query->limit($this->limit);
        }

        $this->items = $query
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $response['categories'] = $this->_pruneRelations($this->items);

        return response()->json($response, 200);
    }

    /**
     * Return category values
     *
     * @param String $store
     * @param String $slug
     * @return \Illuminate\Http\Response
     */
    public function show($store, $slug)
    {
        $this->with = ['breadcrumbs', 'store', 'categories', 'photos'];

        $query = Category::where('slug', $slug);

        $query->with(array_intersect($this->with, $this->relations));

        $this->categories = $query
            ->limit(1)
            ->get()
            ->toArray();

        $this->categories = $this->_pruneRelations($this->categories);

        $this->store = Store::where('slug', $store)->first();

        $this->item = [];
        if (!empty($this->categories)) {
            $this->category = $this->categories[0];
            $this->categoryId = $this->category['id'];

            $this->setProducts();
            $this->category['products'] = $this->products;
        }

        return response()->json([
            'category' => $this->category,
            'store' => $this->store,
            'status' => 'success'
        ], 200);
    }

    /**
     * Find stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function stores(Request $request)
    {
        $response = [];
        $this->limit = $request->get('limit', 24);

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
}
