<?php

namespace App;

class Saleable extends Product
{

    protected $table = 'products';

    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'options',
        'size_label',
        'color_name',
        'color_code',
        'quantity',
        'default_variant',
        'photos',
        'types',
        'category_id',
        'is_great_value',
        'has_photo',
        'price_whole',
        'price_formatted',
        'price_super',
        'discount_formatted',
        'discount_super',
        'discount_percent',
        'thumbnail_url',
        'photo_url',
        'rating',
        'store',
        'route'

    ];

    public function getOptionsAttribute()
    {
        return ProductVariant::with('product_type')
            ->where('product_id', $this->id)
            ->whereNull('product_variant_id')
            ->get();
    }
}
