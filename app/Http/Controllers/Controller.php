<?php

namespace App\Http\Controllers;

use App\Address;
use App\Product;
use App\UserAddress;
use Illuminate\Foundation\Bus\DispatchesJobs;
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
        $limit = [],
        $level = [],
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
     * @param String $categoryId
     * @return mixed
     */
    protected function setProducts($categoryId)
    {
        $sort = request()->get('sort', 0);
        $sortOptions = Product::$sortOptions;

        $sort = $sortOptions[$sort];

        $products = Product::whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_products.category_id', $categoryId);
        })
            ->where('is_active', true)
            ->orderBy($sort['column'], $sort['dir'])
            ->paginate(18);
        return $products;
    }

    /**
     * @param String $record
     */
    protected function _setRouteStore(&$record)
    {
        $route = $record['route'];
        $record['route'] = '/store/' . $this->store->slug + $route;
    }
}
