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
}
