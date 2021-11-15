<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductValue extends Model
{
    /**
     * Get the related values
     */
    public function product_attribute()
    {
        return $this->belongsTo('App\ProductAttribute');
    }
}
