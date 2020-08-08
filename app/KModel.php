<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KModel extends Model
{
    public function splitPrice($price)
    {
        $priceParts = explode('.', $price);

        $values = [
            'price' => array_shift($priceParts),
            'super' => array_shift($priceParts)
        ];

        return $values;
    }
}
