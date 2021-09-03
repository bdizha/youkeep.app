<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    /**
     * Get the service that's in the cart.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get the cart that has the service.
     */
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }
}
