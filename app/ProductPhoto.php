<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{


    /**
     * Get all of the products for the product type.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
