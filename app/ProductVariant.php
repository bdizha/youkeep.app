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
        'options'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'discount', 'is_active', 'required_min', 'required_max', 'is_available', 'product_variant_id', 'product_type_id', 'product_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'is_active', 'product_id', 'product_type_id'
    ];

    public function getOptionsAttribute()
    {
        return Self::with('product_type')
            ->where('product_variant_id', $this->id)
            ->get();
    }

    /**
     * The service of this variant
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get all of the service types for the product variant.
     */
    public function product_type()
    {
        return $this->belongsTo('App\ProductType');
    }

    /**
     * Get the associated parent variant
     */
    public function parent()
    {
        return $this->belongsTo('App\ProductVariant');
    }

    /**
     * Get the associated parent variant
     */
    public function variants()
    {
        return $this->hasMany('App\ProductVariant');
    }
}
