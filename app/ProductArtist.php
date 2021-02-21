<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductArtist extends Model
{
    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * Get related products
     */
    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Product');
    }

    /**
     * Get related artists
     */
    public function artists(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\User');
    }
}
