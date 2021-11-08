<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $appends = ['currency_url'];

    public function getCurrencyUrlAttribute()
    {
        return !empty($this->code) ? '/currencies/' . $this->code . '.svg' : null;
    }
}
