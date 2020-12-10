<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    /**
     * Get the category parent
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the store parent
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
