<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public static $type = [
        1 => "I'm a business",
        2 => "I'm a shopper"
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'email', 'is_active',
    ];
}
