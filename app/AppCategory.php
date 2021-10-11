<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppCategory extends Model
{
    /**
     * The associated category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    /**
     * The associated app
     */
    public function app()
    {
        return $this->belongsTo('App\App');
    }
}
