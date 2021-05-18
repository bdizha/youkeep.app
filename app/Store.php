<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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
     * @var string[]
     */
    private $ignoredPhotos = ['d2fda6827655f4795e9f288f7404358a069fe1ce'];


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
        'content_formatted',
        'photos',
        'route',
        'rate',
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
    public function getRateAttribute()
    {
        return rand(1, 5);
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
     * @return array
     */
    public function getPhotosAttribute()
    {
        $photos = [];

        foreach ($this->product_photos as $photo) {
            if (count($photos) > 5) break;

            if (!in_array($photo->thumb, $this->ignoredPhotos)) {
                if (file_exists(public_path('storage/product/' . $photo->thumb)) && !empty($photo->thumb)) {
                    $photos[] = url('/storage/product/' . $photo->thumb);
                }
            }
        }

        if (count($photos) >= 6) {
            $photos = Arr::random($photos, min(6, count($photos)));
        } else {
            $photosShortfall = count($photos) - 6;
            while ($photosShortfall > 0) {
                $photos[] = url('/storage/product/icon_default.png');
                $photosShortfall--;
            }
        }

        return $photos;
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
            $content .= "{$value}<br/>";
        }

        return 'Coming soon!';
    }

    /**
     * Get the related categories
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'store_categories', 'store_id', 'category_id')->take(24);;
    }

    /**
     * Get the related product photos
     */
    public function product_photos()
    {
        return $this->belongsToMany('App\ProductPhoto', 'store_products', 'store_id', 'product_id')->take(24);;
    }
}
