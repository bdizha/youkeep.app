<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use Sluggable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'content',
    ];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    public function sluggable()
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
        'content_formatted',
        'route',
        'photo_url',
        'photo_cover_url',
    ];

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        $route = '/store/' . $this->slug;
        return $route;
    }

    /**
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        return url('/storage/store/' . $this->photo);
    }

    /**
     * @return string
     */
    public function getPhotoCoverUrlAttribute()
    {
        return url('/storage/store/' . $this->photo_cover);
    }

    /**
     * @return string
     */
    public function getContentFormattedAttribute()
    {
        $parts = unserialize($this->content);

        if (empty($parts)) {
            return null;
        }

        $content = null;
        foreach ($parts as $key => $value) {
            $label = $value;
            $content .= "{$value}<br/>";
        }

        return 'Coming soon!';
    }

    /**
     * Get the related categories
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'store_categories', 'store_id', 'category_id')->take(12);;
    }
}
