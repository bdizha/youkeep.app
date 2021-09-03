<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{


    /**
     * Get all of the products for the service type.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
