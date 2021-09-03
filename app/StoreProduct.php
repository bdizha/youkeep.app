<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreProduct extends Model
{
    /**
     * Get the store that has service
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
