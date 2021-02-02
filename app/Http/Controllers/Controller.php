<?php

namespace App\Http\Controllers;

use App\Address;
use App\Product;
use App\Review;
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
        $categoryId = null,
        $productId = null,
        $productType = null,
        $reviewId = null,
        $products = [],
        $reviews = [],
        $categories = [],
        $limit = 24,
        $level = 1,
        $items = [],
        $item = [];

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
        return "/L" . str_pad($this->level + 1, 6, STR_PAD_LEFT, "0");
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
     * @return void
     */
    protected function setProducts()
    {
        $sort = request()->get('sort', 0);
        $sortOptions = Product::$sortOptions;

        $sort = $sortOptions[$sort];

        if (!empty($this->productId)) {
            $query = Product::find($this->productId)->links()
                ->where('type', $this->productType);
        }

        if (!empty($this->categoryId)) {
            $query = Product::orderBy($sort['column'], $sort['dir']);
            $query->whereHas('categories', function ($query) {
                $query->where('category_products.category_id', $this->categoryId);
            });
        }

        $this->products = $query->orderBy($sort['column'], $sort['dir'])
            ->paginate($this->limit);
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
     * @param String $record
     */
    protected function _setRouteStore(&$record)
    {
        $route = $record['route'];
        $record['route'] = '/store/' . $this->store->slug + $route;
    }

    /**
     * @param Request $request
     * @return string
     */
    protected function _setCacheKey(Request $request): string
    {
        $fields = $request->all();
        $value = "category";

        foreach ($fields as $field) {
            $value .= "_" . (is_array($field) ? implode("_", $field) : $field);
        }

        $key = md5($value);
        return $key;
    }
}
