<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
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
        'card_number', 'expire_at', 'csv', 'user_id', 'type',
    ];

    /**
     * Get the user that has the address.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
