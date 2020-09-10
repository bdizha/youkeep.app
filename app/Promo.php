<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public static $types = [
        1 => 'Visa',
        2 => 'MasterCard',
        3 => 'Other',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'coupon', 'notes', 'expire_at', 'user_id', 'type',
    ];

    /**
     * Get the user that has the promo.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
