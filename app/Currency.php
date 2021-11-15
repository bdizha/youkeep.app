<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    const CURRENCY_ETH = 1;
    const CURRENCY_SOL = 2;
    const CURRENCY_USD = 3;

    protected $appends = ['currency_url'];

    public function getCurrencyUrlAttribute()
    {
        return !empty($this->code) ? '/currencies/' . $this->code . '.svg' : null;
    }
}
