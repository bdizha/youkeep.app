<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    /**
     * Get the associated store
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    /**
     * Get the associated currency
     */
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
}
