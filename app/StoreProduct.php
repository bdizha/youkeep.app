<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreProduct extends Model
{
    /**
     * Get the store that has product
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
