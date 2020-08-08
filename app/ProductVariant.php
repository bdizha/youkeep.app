<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'is_active', 'product_id', 'product_type_id'
    ];

    /**
     * The product of this variant
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get all of the product types for the product variant.
     */
    public function product_type()
    {
        return $this->belongsTo('App\ProductType');
    }
}
