<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductType extends Model
{
    use Sluggable;

    const TYPE_SIZE = 1;
    const TYPE_COLOR = 2;
    const TYPE_VOLUME = 3;
    const TYPE_MASS = 4;
    const TYPE_BRAND = 5;
    const TYPE_COLLECTION = 6;
    const TYPE_STORE = 7;

    public static $types = [
        self::TYPE_SIZE => 'Size',
        self::TYPE_COLOR => 'Color',
        self::TYPE_VOLUME => 'Volume',
        self::TYPE_MASS => 'Mass',
        self::TYPE_BRAND => 'Brand',
        self::TYPE_COLLECTION => 'Collection',
        self::TYPE_STORE => 'Store',
    ];

    public static $lengths = [
        self::TYPE_SIZE => 1,
        self::TYPE_COLOR => 6,
        self::TYPE_VOLUME => 1,
        self::TYPE_MASS => 1,
        self::TYPE_BRAND => 1,
        self::TYPE_COLLECTION => 1,
        self::TYPE_STORE => 1,
    ];


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
        'created_at', 'updated_at', 'is_active'
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
     * Get all of the products variants for this product type.
     */
    public function variants()
    {
        return $this->hasMany('App\ProductVariant');
    }
}
