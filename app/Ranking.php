<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = [
        'hash', 'volume', 'diff_week', 'diff_month', 'floor', 'owners', 'assets', 'currency_id', 'randomized_at', 'store_id'
    ];

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
