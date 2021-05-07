<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryProduct;
use App\Product;
use App\ProductLink;
use App\StoreCategory;
use App\StoreProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    protected $without = ['categories', 'products', 'category', 'breadcrumbs', 'photos', 'store'],
        $relations = ['categories', 'products', 'category', 'store'],
        $with = [],
        $categoryId = null,
        $limit = 18,
        $level = [],
        $items = [],
        $filters = [],
        $item = [];

    /**
     * Find products by category id
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->productType = $request->get('type', 1);
        $this->limit = $request->get('limit', 12);
        $this->categoryId = $request->get('category_id', null);
        $this->storeId = $request->get('store_id', null);
        $this->productId = $request->get('product_id', null);
        $this->filters = $request->get('filters', []);

        $key = $this->_setCacheKey($request);

        if (Cache::has($key) && false) {
            $response = Cache::get($key, []);
        } else {
            $this->_setProducts();

            $response = $this->products;
            Cache::put($key, \GuzzleHttp\json_encode($response), now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }

    /**
     * Find product by slug
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($slug = null, Request $request)
    {
        $response = [];
        $this->slug = $request->get('slug', $slug);
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

                    $this->categoryProduct = CategoryProduct::where('product_id', $this->product->id)
                        ->first();

                    if (!empty($this->categoryProduct)) {
                        $this->storeCategory = StoreCategory::where('store_id', $this->store->id)
                            ->where('category_id', $this->categoryProduct->category_id)
                            ->orderBy('level', 'DESC')
                            ->first();
                    }
                }
            }

            $this->_setBreadcrumbs();
            $this->product['breadcrumbs'] = $this->breadcrumbs;
            $categories = [];

            $productTypes = ProductLink::$types;
            foreach ($productTypes as $productType => $name) {
                $this->productType = $productType;
                $this->productId = $this->product->id;
                $this->_setProducts();

                if (!empty($this->products)) {
                    $categories[] = [
                        'type' => $productType,
                        'name' => $name,
                        'has_products' => $this->products->count() > 0
                    ];
                }
            }

            $this->product->categories = $categories;
            $response['store'] = $this->store;
            $response['product'] = $this->product;
            $response['category'] = [];
            $response['categories'] = [];

            Cache::put($key, \GuzzleHttp\json_encode($response), now()->addMinutes(60 * 9)); // 9 hours
        }

        return response()->json($response, 200);
    }
}
