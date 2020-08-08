<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    /**
     * Get the product that's in the cart.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get the cart that has the product.
     */
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }
}
