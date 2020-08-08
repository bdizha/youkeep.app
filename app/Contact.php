<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static $category = [
        1 => 'A thank you note',
        2 => 'General query',
        3 => 'Support request',
        4 => 'Shopping help',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mobile', 'email', 'notes', 'category',
    ];
}
