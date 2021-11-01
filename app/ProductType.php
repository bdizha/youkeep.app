<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductType extends Model
{
    use Sluggable;

    const TYPE_DEFAULT = 0;
    const TYPE_SIZE = 1;
    const TYPE_COLOR = 2;
    const TYPE_VOLUME = 3;
    const TYPE_MASS = 4;
    const TYPE_BRAND = 5;
    const TYPE_COLLECTION = 6;
    const TYPE_STORE = 7;
    const TYPE_CUSTOMIZATION = 8;
    const TYPE_ATTRIBUTE = 9;

    public static $types = [
        self::TYPE_DEFAULT => 'Default',
        self::TYPE_SIZE => 'Size',
        self::TYPE_COLOR => 'Color',
        self::TYPE_VOLUME => 'Volume',
        self::TYPE_MASS => 'Mass',
        self::TYPE_BRAND => 'Brand',
        self::TYPE_COLLECTION => 'Collection',
        self::TYPE_STORE => 'Store',
        self::TYPE_CUSTOMIZATION => 'Customization',
        self::TYPE_ATTRIBUTE => 'Attributes'
    ];

    public static $lengths = [
        self::TYPE_DEFAULT => 1,
        self::TYPE_SIZE => 2,
        self::TYPE_COLOR => 3,
        self::TYPE_VOLUME => 1,
        self::TYPE_MASS => 2,
        self::TYPE_BRAND => 1,
        self::TYPE_COLLECTION => 1,
        self::TYPE_STORE => 1,
        self::TYPE_CUSTOMIZATION => 1,
        self::TYPE_ATTRIBUTE => 1,
    ];


    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'columns'
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
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getColumnsAttribute()
    {
        return self::$lengths[$this->type];
    }

    /**
     * Get all of the products variants for this service type.
     */
    public function variants()
    {
        return $this->hasMany('App\ProductVariant');
    }

    /**
     * @return Bool
     */
    static function hasDefaultType()
    {
        $type = self::where('type', self::TYPE_DEFAULT)
            ->first();

        return !empty($type);
    }

    static function setDefaultType()
    {
        $hasDefaultType = self::hasDefaultType();

        $defaultType = null;

        if (empty($hasDefaultType)) {
            $attributes = [
                'name' => 'Default',
                'type' => self::TYPE_DEFAULT,
            ];

            $values = [
                'name' => 'Default',
                'type' => self::TYPE_DEFAULT,
                'is_active' => true
            ];

            $defaultType = ProductType::updateOrCreate($attributes, $values);
        } else {

            $defaultType = ProductType::where('type', self::TYPE_DEFAULT)
                ->first();
        }

        return $defaultType;
    }
}
