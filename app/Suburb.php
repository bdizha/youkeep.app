<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Suburb extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the city that has the suburb.
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * Get the buyer that has the suburb.
     */
    public function buyer()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the address for the suburb.
     */
    public function addresses()
    {
        return $this->hasMany('App\Address', 'suburb_id', 'id');
    }
}
