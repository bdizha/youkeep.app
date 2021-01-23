<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    const TYPE_PRODUCT = 1;
    const TYPE_CATEGORY = 2;
    const TYPE_STORE = 3;

    public static $types = [
        self::TYPE_PRODUCT => 'Product',
        self::TYPE_CATEGORY => 'Category',
        self::TYPE_STORE => 'Store'
    ];
}
