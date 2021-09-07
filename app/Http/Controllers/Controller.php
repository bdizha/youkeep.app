<?php

namespace App\Http\Controllers;

use App\Address;
use App\Banner;
use App\Category;
use App\Country;
use App\Product;
use App\ProductType;
use App\ProductVariant;
use App\Review;
use App\Store;
use App\StoreCategory;
use App\UserAddress;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Integer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $without = [],
        $relations = [],
        $with = [],
        $orderBy = null,
        $banners = [],
        $categoryId = null,
        $category = null,
        $storeCategory = null,
        $product = null,
        $productId = null,
        $categoryParentId = null,
        $productType = null,
        $storeId = null,
        $appId = null,
        $app = null,
        $slug = null,
        $storeSlug = null,
        $reviewId = null,
        $products = [],
        $reviews = [],
        $categories = [],
        $productTypes = [],
        $categoryType = null,
        $filters = [],
        $store = null,
        $stores = [],
        $limit = 24,
        $level = 1,
        $items = [],
        $item = null,
        $catalogMap = null,
        $countries = [];


    /**
     * @param array $values
     * @return array
     */
    public static function _setAddress(array $values)
    {
        $userId = Auth::user() ? Auth::user()->id : 1;

        if (!empty($values['id'])) {
            $attributes = [
                'id' => $values['id'],
            ];
        } else {
            $attributes = [
                'user_id' => $userId,
                'postal_code' => $values['postal_code'],
            ];
        }
        $values['user_id'] = $userId;

        if (!empty($values['is_default'])) {
            // ensure other other defaults are reset
            Address::where('user_id', $userId)
                ->update(['is_default' => false]);
        }

        // save account address
        $address = Address::updateOrCreate($attributes, $values);

        $attributes = [
            'user_id' => $address->id,
            'address_id' => $address->id,
        ];

        $addresses = Address::where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();

        session('address', $address);
        session('addresses', $addresses);
        return array($address, $addresses);
    }

    protected function _decodeLevel($level)
    {
        $level = trim($level, "L");
        $level = trim($level, "0");

        return $level;
    }

    /**
     * @param $records
     * @return array
     */
    protected function _pruneRelations($records)
    {
        $prunedRelations = [];
        foreach ($records as $key => $record) {
            foreach ($this->without as $field) {
                if (!isset($record[$field])) {
                    continue;
                }
                if (!in_array($field, $this->with)) {
                    $record[$field] = [];
                } else if (is_array($record[$field])) {
                    $record[$field] = $this->_pruneRelations($record[$field]);
                } else if (is_array($record[$field])) {
                    $record[$field] = $this->_pruneRelations($record[$field]);
                }
            }
            $prunedRelations[$key] = $record;
        }
        return $prunedRelations;
    }

    /**
     * Get categories by criteria
     */
    protected function _setCategories(): void
    {
        if (!empty($this->storeSlug)) {
            $this->store = Store::where('slug', $this->storeSlug)
                ->first();
        }
        else if (!empty($this->storeId)) {
            $this->store = Store::where('id', $this->storeId)
                ->first();
        }

        if (!empty($this->slug)) {
            // Check for the existences of the parent category id
            $slugParts = explode('--', $this->slug);

            if(count($slugParts) > 0){
                $this->categoryId = $slugParts[count($slugParts) - 1];
            }
        }

        if (!empty($this->categoryId)) {
            $this->level++;
            $this->category = StoreCategory::where('id', $this->categoryId)
                ->with('store')
                ->first();

            $this->store = $this->category->store;
        }

        $storeCategoryQuery = StoreCategory::with('category');

        if (!empty($this->categoryId)) {
            $storeCategoryQuery->where('parent_id', $this->categoryId);
        }

        $storeCategoryQuery->where('level', $this->level)
            ->where('has_products', true);

        if($this->level === 1){
            $storeCategoryQuery->where('has_categories', true);
        }

        if (!empty($this->store->id)) {
            $storeCategoryQuery->where('store_id', $this->store->id);
        }

        $this->with = array_intersect($this->with, $this->relations);

        $storeCategoryQuery->orderBy($this->orderBy, 'DESC')
            ->take($this->limit);

        $this->categories = $storeCategoryQuery
            ->get()
            ->toArray();

        if ($this->categoryType === Category::TYPE_STORE) {
            $this->_setCategoryStores();
        }

        $this->categories = $this->_pruneRelations($this->categories);
    }

    /**
     * Get categories by criteria
     **/
    protected function _setBanners(): void
    {
        $categoryBannerQuery = Banner::orderBy($this->orderBy, 'DESC')
            ->where('is_active', true)
            ->take($this->limit);

        $this->banners = $categoryBannerQuery
            ->get()
            ->toArray();
    }

    /**
     * Get catalog mapping
     **/
    protected function _setCatalogMap($parent = null): void
    {
        $this->_setCatalogMapFrom();

        $this->_setCatalogMapTo();
    }

    /**
     * Get catalog mapping
     **/
    protected function _setCatalogMapFrom($parent = null): void
    {
        $storeCategoryQuery = StoreCategory::orderBy($this->orderBy, 'DESC')
            ->where('store_id', 24);

        if(!empty($parent->id)){
            $storeCategoryQuery->where('parent_id', $parent->id);
        }
        else{
            $storeCategoryQuery->where('level', 1);
        }

        $index = 'from';
        $ownerCategories = $storeCategoryQuery
            ->get();

        foreach ($ownerCategories as $ownerCategory) {
            $this->_processMapCategory($ownerCategory, $parent, $index);

            $this->_setCatalogMapFrom($ownerCategory);
        }
    }

    /**
     * Get catalog mapping
     **/
    protected function _setCatalogMapTo($parent = null): void
    {
        $storeCategoryQuery = StoreCategory::orderBy($this->orderBy, 'DESC')
            ->where('store_id', $this->storeId);

        if(!empty($parent->id)){
            $storeCategoryQuery->where('parent_id', $parent->id);
        }
        else{
            $storeCategoryQuery->where('level', 1);
        }

        $index = 'to';
        $ownerCategories = $storeCategoryQuery
            ->get();

        if(!empty($parent->id)){
            $storeCategoryQuery->where('parent_id', $parent->id);
        }

        foreach ($ownerCategories as $ownerCategory) {
            $this->_processMapCategory($ownerCategory, $parent, $index);
            $this->_setCatalogMapTo($ownerCategory);
        }
    }

    /**
     * @param $ownerCategory
     * @param $parent
     * @param $index
     */
    protected function _processMapCategory(&$ownerCategory, $parent, $index = 'from'): void
    {
        $name = $ownerCategory->category->name;

        $ownerCategory->title = !empty($parent->id) ? $parent->title . " > " . $name : $name;
        $category = [
            'title' => $ownerCategory->title,
            'id' => $ownerCategory->id,
        ];

        $this->catalogMap[$index][] = $category;
    }

    /**
     * @return void
     */
    protected function _setProducts()
    {
        $sort = request()->get('sort', 0);
        $sortOptions = Product::$sortOptions;
        $sort = $sortOptions[$sort];

        if (!empty($this->productId)) {
            $query = Product::find($this->productId)->links()
                ->where('type', $this->productType);
        } else {
            $query = Product::orderBy($sort['column'], $sort['dir']);
        }

        if (!empty($this->storeId)) {
            $this->store = Store::where('id', $this->storeId)
                ->first();
        }

        if (!empty($this->category['id'])) {
            $this->categoryId = $this->category['id'];
        }

        if (!empty($this->categoryId)) {
            $this->category = StoreCategory::where('id', $this->categoryId)
                ->first();
        }

        if (!empty($this->categoryId)) {
            $query->whereHas('categories', function ($query) {
                $query->where('category_products.category_id', $this->categoryId);
            });

            if (!empty($this->filters)) {
                $query->whereHas('product_types', function ($query) {
                    $query->whereIn('product_types.id', $this->filters);
                });
            }
        }

        if (!empty($this->store->id)) {
//            $query->where('store_id', $this->store->id);
        }

        if (!empty($query)) {
            $this->products = $query->orderBy($sort['column'], $sort['dir'])
                ->paginate($this->limit);

            $this->_setProductsRoutes();
        }
    }

    protected function _setBreadcrumbs(){
        $breadcrumbs = [];

        if(!empty($this->category)){
            $breadcrumbs = $this->category->breadcrumbs;
            $breadcrumbs[] = [
                'id' => $this->product->id,
                'slug' => $this->product->slug,
                'route' => $this->category->route . $this->product->route,
                'name' => $this->product->name,
                'has_products' => false,
                'has_categories' => false,
                'categories' => [],
            ];
        }

        $this->product->breadcrumbs = $breadcrumbs;
    }

    /**
     * @return void
     */
    protected function _setProductsRoutes(): void
    {
        $products = json_decode($this->products->toJson());

        $products->data = array_map(function ($product) {
            $route = (!empty($this->category->route) ? $this->category->route : null) .  $product->route;

            $product->route = $route;
            return $product;
        }, $products->data);

        $this->products = $products;
    }


    /**
     * @return array
     */
    protected function _setCategoryStores()
    {
        foreach ($this->categories as $key => $category) {
            $storeCategory = Category::with('stores')
                ->where('id', $category['id'])
                ->first();

            if (empty($storeCategory)) {
                continue;
            }

            $this->categories[$key]['stores'] = $storeCategory->stores;
        }
    }

    /**
     * @return void
     */
    protected function setReviews()
    {
        $sort = request()->get('sort', 0);
        $sortOptions = Review::$sortOptions;

        $sort = $sortOptions[$sort];

        $this->reviews = Review::whereHas('service', function ($query) {
            $query->where('reviews.product_id', $this->productId);
        })
            ->orderBy($sort['column'], $sort['dir'])
            ->paginate($this->limit);
    }

    /**
     * return void
     */
    protected function _setStoreRoute()
    {
        if (!empty($this->store->id)) {
            $this->route = '/store/' . $this->store->slug . $this->route;
        }
    }

    /**
     * @param Request $request
     * @return string
     */
    protected function _setCacheKey(Request $request): string
    {
        $fields = $request->all();
        $value = $request->path();

        foreach ($fields as $field) {
            $value .= "_" . (is_array($field) ? implode("_", $field) : $field);
        }

        $key = md5($value);
        return $key;
    }

    /**
     * @return void
     */
    protected function _setFilters(): void
    {
        $types = ProductType::$types;
        $this->productTypes = [];

        if (empty($this->product->id)) {
            return;
        }

        foreach ($types as $type => $label) {
            $variants = ProductVariant::with([
                'product_type' => function ($query) use ($type) {
                    $query->where('product_types.type', $type);
                }])
                ->where('product_id', $this->product->id)
                ->get();

            if (!empty($variants)) {
                $productVariants = [];
                foreach ($variants as $variant) {
                    if (!empty($variant->product_type)) {
                        $variant['label'] = @$variant->product_type->nam;
                        $productVariants[] = $variant;
                    }
                }

                $this->productTypes[] = [
                    'label' => $label,
                    'variants' => $productVariants,
                    'has_variants' => count($productVariants) > 0
                ];
            }
        }
    }

    /**
     * @return mixed
     */
    protected function _setStores()
    {
        $query = Store::where('is_active', true);

        if (!empty($this->term)) {
            $query->where('name', 'like', '%' . $this->term . '%');
        }

        if (!empty($this->categoryId)) {
            $query->where('category_id', $this->categoryId);
        }

        $this->stores = $query
            ->orderBy('created_at', 'DESC')
            ->paginate($this->limit);
    }

    /**
     * @param Request $request
     * @return string
     */
    protected function _setParams(Request $request): string
    {
        $this->orderBy = $request->get('order_by', 'randomized_at');
        $this->with = $request->get('with', []);
        $this->hasBanners = $request->get('has_banners', false);
        $this->categoryType = $request->get('type', 2);
        $this->categoryId = $request->get('category_id', null);
        $this->storeId = $request->get('store_id', null);
        $this->storeSlug = $request->get('store', null);
        $key = $this->_setCacheKey($request);
        return $key;
    }

    /**
     * @return void
     */
    protected function _setCountries()
    {
        $this->countries = Country::orderBy('name', 'ASC')
            ->get();
    }
}
