<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->method = '_setProducts';
        return $this->_setParams($request);
    }

    /**
     * Find service by slug
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($slug = null, Request $request)
    {
        $this->slug = $slug;
        $this->method = '_setProduct';
        return $this->_setParams($request);
    }
}
