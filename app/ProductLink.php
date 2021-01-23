<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLink extends Model
{
    const TYPE_RELATED = 1;
    const TYPE_BOUGHT_WITH = 2;
}
