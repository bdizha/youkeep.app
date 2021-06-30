<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
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
        $breadcrumbs = [],
        $categoryId = null,
        $category = null,
        $storeCategory = null,
        $product = null,
        $productId = null,
        $productType = null,
        $storeId = null,
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
        $item = null;


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

    protected function _encodeLevel(): string
    {
        return "/L" . str_pad(empty($this->level) ? 1 : $this->level, 6, STR_PAD_LEFT, "0");
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

        if (!empty($this->storeId)) {
            $this->store = Store::where('id', $this->storeId)
                ->first();
        }

        if (!empty($this->slug)) {
            $this->category = Category::where('slug', $this->slug)
                ->first()
                ->toArray();
        }

        if (!empty($this->categoryId)) {
            $this->category = Category::where('id', $this->categoryId)
                ->first()
                ->toArray();
        }

        $storeCategoryQuery = StoreCategory::with('category');

        if (!empty($this->parentId)) {
            $storeCategoryQuery->where('parent_id', $this->parentId);
            $this->level = 0;
        }
        else{
            $this->level = 0;
        }

        $this->storeCategories = $storeCategoryQuery->where('level', $this->level)
            ->get();

        // $this->category['level'] = $this->level;

        if (!empty($this->storeSlug)) {
            $this->_setBreadcrumbs();
            $this->category['breadcrumbs'] = $this->breadcrumbs;
        }

        ++$this->level;

        $this->with = array_intersect($this->with, $this->relations);

        $query = Category::with($this->with)
            ->take($this->limit);

        $query->whereHas('stores', function ($query) {
            if (!empty($this->storeCategory)) {
                $query->where('parent_id', $this->storeCategory->id);
            }

            if (isset($this->level)) {
                $query->where('level', $this->level);

                if($this->level == 0){
                    $query->where('has_products', true);
                    $query->where('has_categories', true);
                }
            }

            if ($this->categoryType == Category::TYPE_CATALOG) {
                $query->where('store_categories.has_products', true);

                if (empty($this->store->id) && empty($this->slug)) {
                    $query->where('store_categories.has_categories', true);
                }
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

        if ($this->categoryType === Category::TYPE_STORE) {
            $this->_setCategoryStores();
        }

        $this->categories = $this->_pruneRelations($this->categories);
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
            $query->where('store_id', $this->store->id);
        }

        if (!empty($query)) {
            $this->products = $query->orderBy($sort['column'], $sort['dir'])
                ->paginate($this->limit);
        }
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

        $this->reviews = Review::whereHas('product', function ($query) {
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
    protected function _setBreadcrumbs()
    {
        $this->breadcrumbs = $this->storeCategory->breadcrumbs;
    }

    /**
     * @return void
     */
    protected function _hidrateCategories(): void
    {
        $this->categories = array_map(function ($category) {
            return $this->_setCategoryRoute($category);
        }, $this->storeCategories);
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
        $this->without = ['categories'];

        if (!empty($this->term)) {
            $query->where('name', 'like', '%' . $this->term . '%');
        }

        if (!empty($this->categoryId)) {
            $query->where('category_id', $this->categoryId);
        }

        if (!empty($this->limit)) {
            $query->limit($this->limit);
        }

        $this->stores = $query
            ->orderBy('created_at', 'DESC')
            ->paginate($this->limit);
    }

    /**
     * @param $category
     * @return mixed
     */
    protected function _setCategoryRoute($storeCategory)
    {
        $this->route = $category['route'];

        $this->_setStoreRoute();
        $this->route .= $this->_encodeLevel();

        $category['route'] = $this->route;
        $category['level'] = $this->level;

        if (!empty($category['categories'])) {
            $category['categories'] = array_map(function ($category) {
                return $this->_setCategoryRoute($category);
            }, $category['categories']);
        }

        return $category;
    }
}
