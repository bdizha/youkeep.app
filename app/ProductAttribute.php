<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{

    /**
     * Get the related values
     */
    public function values()
    {
        return $this->hasMany('App\ProductValue')->take(24);
    }
}
