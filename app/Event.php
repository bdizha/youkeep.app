<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    const TYPE_STARRED = 0;
    const TYPE_CREATED = 1;
    const TYPE_COLLECTED = 2;
    const TYPE_VIEWED = 3;

    public static $types = [
        self::TYPE_STARRED => 'Starred',
        self::TYPE_CREATED => 'Created',
        self::TYPE_COLLECTED => 'Collected',
        self::TYPE_VIEWED => 'Viewed'
    ];
}
