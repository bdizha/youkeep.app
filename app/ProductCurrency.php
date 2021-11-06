<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCurrency extends Model
{
    /**
     * Get the associated product
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get the associated products
     */
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
}
