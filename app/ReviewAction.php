<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewAction extends Model
{
    const TYPE_COMMENT = 1;
    const TYPE_UP = 2;
    const TYPE_DOWN = 3;

    public static $types = [
        self::TYPE_COMMENT => 'Comment',
        self::TYPE_UP => 'Up',
        self::TYPE_DOWN => 'Down'
    ];
}
