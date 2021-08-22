<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryBanner extends Model
{
    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'store_category',
        'route'
    ];

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        $storeCategory = $this->getStoreCategoryAttribute();
        return !empty($storeCategory->route) ? $storeCategory->route : null;
    }

    /**
     * @return array
     */
    public function getStoreCategoryAttribute()
    {
        $storeCategory = StoreCategory::where('id', $this->category_id)
            ->first();

        return $storeCategory;
    }
}
