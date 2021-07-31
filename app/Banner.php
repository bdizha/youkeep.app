<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'route',
        'category',
        'photo_url',
    ];

    /**
     * @return array
     */
    public function getCategoryAttribute()
    {
        return !empty($this->store_category->category->name) ? $this->store_category->category->name : null;
    }

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        return !empty($this->store_category->route) ? $this->store_category->route : null;
    }

    /**
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        return url('/storage/banner/' . $this->photo);
    }

    /**
     * Get the categories
     */
    public function store_category()
    {
        return $this->belongsTo('App\StoreCategory');
    }
}
