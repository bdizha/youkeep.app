<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Get cart the has the order
     */
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    /**
     * Get the buyer that has the order.
     */
    public function buyer()
    {
        return $this->belongsTo('App\User');
    }
}
