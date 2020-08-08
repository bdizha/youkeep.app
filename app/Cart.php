<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    /**
     * Get the buyer that has the order.
     */
    public function buyer()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the products for the order.
     */
    public function products()
    {
        return $this->belongsToMany('App\CartProduct', 'cart_products', 'cart_id', 'product_id');
    }

    /**
     * Get the orders that belong to this cart
     */
    public function orders()
    {
        return $this->belongsTo('App\Order');
    }
}
