<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Serve extends Model
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
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'route',
        'photo_url'
    ];

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        $route = '/serve/' . $this->slug;
        return $route;
    }

    /**
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        return url('/storage/category/' . $this->photo);
    }

    /**
     * Get the associated stores
     */
    public function stores()
    {
        return $this->belongsToMany('App\Store', 'store_serves', 'serve_id', 'store_id');
    }
}
