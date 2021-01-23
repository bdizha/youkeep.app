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

    public static $types = [
        self::TYPE_SIZE => 'Size',
        self::TYPE_COLOR => 'Color',
        self::TYPE_VOLUME => 'Volume',
        self::TYPE_MASS => 'Mass',
        self::TYPE_BRAND => 'Brand',
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
