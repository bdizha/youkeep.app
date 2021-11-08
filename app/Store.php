<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Store extends Model
{
    use Sluggable;

    public static $tags = [
        '10% off',
        'Up to 15%',
        '15% off',
        '20% off',
        'Free shipping',
        'Buy more save more',
        'Buy one get one free',
        'Gift with purchase'
    ];

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
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'content_formatted',
        'photos',
        'tag',
        'route',
        'rate',
        'photo_url',
        'photo_cover_url',
        'joined_at',
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
     * @return string
     */
    public function getRouteAttribute()
    {
        $route = '/collection/' . $this->slug;
        return $route;
    }

    /**
     * @return string
     */
    public function getJoinedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at)->format('n M Y');
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
    public function getTagAttribute()
    {
        $tags = self::$tags;
        return $tags[rand(0, count($tags) - 1)];
    }

    /**
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        $photo_url = null;

        if (!empty($this->photo)) {
            $isUrl = strpos($this->photo, 'http') !== false;
            $photo_url = $isUrl ? $this->photo : url('/storage/product/' . $this->photo);
        }

        return $photo_url;

    }

    /**
     * @return string
     */
    public function getPhotoCoverUrlAttribute()
    {
        $photo_cover_url = null;
        if (!empty($this->photo_cover)) {
            $isUrl = strpos($this->photo_cover, 'http') !== false;
            $photo_cover_url = $isUrl ? $this->photo_cover : url('/storage/product/' . $this->photo_cover);
        }
        return $photo_cover_url;
    }

    /**
     * @return object
     */
    public function setRanking(): object
    {
        $ranking = [];
        $aggregate = DB::table('products')
            ->select('store_id', DB::raw('SUM(price) as volume'), DB::raw('count(id) as assets'), DB::raw('min(price) as floor'), DB::raw('max(price) as roof'))
            ->groupBy('store_id')
            ->where('store_id', $this->id)
            ->first();

        if (!empty($aggregate)) {
            $rankingData = (array)$aggregate;

            $rankingData['diff_day'] = rand(-150, 96);
            $rankingData['diff_week'] = rand(-150, 96);
            $rankingData['diff_month'] = rand(-150, 96);
            $rankingData['owners'] = rand(1, 3000);

            $rankingData['diff_month'] = rand(-150, 96);

            $hash = md5(json_encode($rankingData));

            $attributes = [
                'hash' => $hash
            ];

            $productCurrency = ProductCurrency::whereHas('product', function ($query) {
                $query->whereHas('store', function ($query) {
                    $query->where('stores.id', $this->id);
                });
            })
                ->first();

            if (!empty($productCurrency)) {
                $rankingData['currency_id'] = $productCurrency->currency_id;
                $ranking = Ranking::updateOrCreate($attributes, $rankingData);
                $ranking->currency = Currency::find($productCurrency->currency_id)->first();
            }
        }
        return $ranking;
    }

    /**
     * @return array
     */
    public function getPhotosAttribute()
    {
        $photos = [];

        foreach ($this->store_photos as $storePhoto) {
            $photos[] = url('/storage/store/' . $storePhoto->photo);
        }

        return $photos;
    }

    /**
     * @return string
     */
    public function getContentFormattedAttribute()
    {
        $content = 'Coming soon!';
        if (!empty($this->content)) {
            $content = $this->content;
        }

        return $content;
    }

    /**
     * Get the store photos
     */
    public function store_photos()
    {
        return $this->hasMany('App\StorePhoto');
    }

    /**
     * Get the related categories
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'store_categories', 'store_id', 'category_id')->take(24);
    }

    /**
     * Get the related service photos
     */
    public function product_photos()
    {
        return $this->belongsToMany('App\ProductPhoto', 'store_products', 'store_id', 'product_id')->take(24);
    }

    /**
     * Get the related serves
     */
    public function serves()
    {
        return $this->belongsToMany('App\Serve', 'store_serves', 'store_id', 'serve_id')->take(24);
    }

    /**
     * Get the related events
     */
    public function events()
    {
        return $this->hasMany('App\Event', 'actor_id', 'id');
    }
}
