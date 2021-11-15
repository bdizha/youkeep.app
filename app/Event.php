<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    const TYPE_DROPPED = 1;
    const TYPE_STARRED = 2;
    const TYPE_COLLECTED = 3;
    const TYPE_VIEWED = 4;
    const TYPE_SUGGESTED = 5;
    const TYPE_PINNED = 6;

    public static $types = [
        self::TYPE_DROPPED => 'Air drops to keep',
        self::TYPE_STARRED => 'Trending NTFs',
        self::TYPE_COLLECTED => 'Just been collected',
        self::TYPE_VIEWED => 'Recently viewed',
        self::TYPE_SUGGESTED => 'You may also like',
        self::TYPE_PINNED => 'Just been pinned',
    ];
}
