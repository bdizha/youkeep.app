<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLink extends Model
{
    const TYPE_RELATED = 1;
    const TYPE_BOUGHT_WITH = 2;
    const TYPE_RECOMMENDED = 3;

    public static $types = [
        self::TYPE_RELATED => 'Related products',
        self::TYPE_BOUGHT_WITH => 'Bought with this item',
        self::TYPE_RECOMMENDED => 'Recommended products',
    ];
}
