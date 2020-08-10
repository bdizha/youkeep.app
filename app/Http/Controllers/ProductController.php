<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $without = ['categories', 'products', 'category', 'breadcrumbs', 'photos', 'store'],
        $relations = ['categories', 'products', 'category', 'store'],
        $with = [],
        $categoryId = null,
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
        $this->limit = $request->get('limit', 18);
        $this->categoryId = $request->get('category_id', null);

        $this->setProducts();

        return response()->json($this->products, 200);
    }

    /**
     * Find category category
     *
     * @param String $storeSlug
     * @param String $slug
     * @param String $productSlug
     * @return \Illuminate\Http\Response
     */
    public function show($storeSlug = null, $slug = null, $productSlug)
    {
        $this->with = ['breadcrumbs', 'store'];

        $query = Category::where('slug', $slug);
        $query->with(array_intersect($this->with, $this->relations));

        $this->items = $query
            ->limit(1)
            ->get()
            ->toArray();

        $this->items = $this->_pruneRelations($this->items);

        $this->item = [];
        if (!empty($this->items)) {
            $this->item = $this->items[0];
        }

        $product = Product::where('is_active', true)
            ->where('slug', $productSlug)
            ->first();

        return response()->json([
            'category' => $this->item,
            'product' => $product,
            'status' => 'success'
        ], 200);
    }
}
