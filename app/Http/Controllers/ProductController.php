<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\StoreProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
     * Find products by category id
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
     * Find product by slug
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $response = [];
        $this->slug = $request->get('slug', null);
        $this->limit = $request->get('limit', 3);
        $this->with = $request->get('with', ['categories', 'photos', 'breadcrumbs']);

        $this->categories = [];
        $this->category = [];
        $this->store = [];

        $key = $this->_setCacheKey($request);

        if (Cache::has($key)) {
            $response = Cache::get($key, []);
        } else {

            $this->product = Product::where('is_active', true)
                ->where('slug', $this->slug)
                ->first();

            if (!empty($this->product)) {
                $storeProduct = StoreProduct::where('product_id', $this->product->id)
                    ->with('store')
                    ->first();

                if (!empty($storeProduct)) {
                    $this->store = $storeProduct->store;
                }

                $query = Category::with(array_intersect($this->with, $this->relations));
                $this->categories = $query
                    ->limit(3)
                    ->get()
                    ->toArray();

                $this->categories = $this->_pruneRelations($this->categories);

                $this->category = Category::where('id', $this->product->category_id)
                    ->first();

            }
            if (!empty($this->categories)) {
                $this->category = $this->categories[0];
            }

            $response['store'] = $this->store;
            $response['category'] = $this->category;
            $response['product'] = $this->product;
            $response['categories'] = $this->categories;
        }

        return response()->json($response, 200);
    }
}
