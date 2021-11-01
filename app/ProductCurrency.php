<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCurrency extends Model
{
    /**
     * Get the associated products
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * Get the associated products
     */
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
}
