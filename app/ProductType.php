<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductType extends Model
{
    use Sluggable;

    public static $types = [
        1 => 'Size',
        2 => 'Color',
        3 => 'Volume',
        4 => 'Kg',
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
