<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Arr;

class Product extends KModel
{
    use Sluggable;

    public static $sizes = [
        1 => 'Small',
        2 => 'Medium',
        3 => 'Large',
        4 => 'Jumbo'
    ];

    public static $colors = [
        1 => 'Green',
        2 => 'Orange'
    ];

    public static $color_codes = [
        1 => '#f50a2b',
        2 => '#f50a2b15'
    ];

    public static $sortOptions = [
        0 => [
            'column' => 'name',
            'dir' => 'ASC',
            'Name: A to Z',
        ],
        1 => [
            'column' => 'name',
            'dir' => 'DESC',
            'Name: Z to A',
        ],
        2 => [
            'column' => 'price',
            'dir' => 'ASC',
            'label' => 'Price: Low to High'
        ],
        3 => [
            'column' => 'price',
            'dir' => 'DESC',
            'Price: High to Low',
        ],
        4 => [
            'column' => 'created_at',
            'dir' => 'DESC',
            'Most Recent',
        ]
    ];

    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'size_label',
        'color_name',
        'color_code',
        'quantity',
        'default_variant',
        'types',
        'photos',
        'category_id',
        'is_great_value',
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

    protected $defaultType = null;
    protected $defaultVariant = null;
    protected $hasDefaultType = false;

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

    public function getQuantityAttribute()
    {
        return 0;
    }

    public function getRatingAttribute()
    {
        return rand(1, 5);
    }

    public function getIsGreatValueAttribute()
    {
        return rand(0, 1);
    }

    public function getCategoryIdAttribute()
    {
        $categoryProduct = CategoryProduct::where('product_id', $this->id)
            ->first();

        return !empty($categoryProduct->category_id) ? $categoryProduct->category_id : null;
    }

    public function getThumbnailUrlAttribute()
    {
        return url('/storage/product/' . $this->thumbnail);
    }

    public function getPhotoUrlAttribute()
    {
        return url('/storage/product/' . $this->photo);
    }

    public function getPhotosAttribute()
    {
        $photos = ProductPhoto::where('product_id', $this->id)
            ->get();

        $productPhotos = [];
        foreach ($photos as $photo) {
            $productPhotos[] = [
                'id' => $photo->id,
                'image' => url('/storage/product/' . $photo->image),
                'thumb' => url('/storage/product/' . $photo->thumb),
            ];
        }

        return $productPhotos;
    }

    public function getSizeLabelAttribute()
    {
        return !empty($this->product_type->size) && !empty(self::$sizes[$this->product_type->size]) ? self::$sizes[$this->product_type->size] : 'Medium';
    }

    public function getColorNameAttribute()
    {
        return !empty($this->product_type->color) && !empty(self::$colors[$this->product_type->color]) ? strtolower(self::$colors[$this->product_type->color]) : 'normal';
    }

    public function getColorCodeAttribute()
    {
        return !empty($this->product_type->color) && !empty(self::$color_codes[$this->product_type->color]) ? strtoupper(self::$color_codes[$this->product_type->color]) : '#3C444C';
    }

    public function getPriceWholeAttribute()
    {
        return number_format($this->price, 0);
    }

    /**
     * @return Bool
     */
    private function hasDefaultType()
    {
        $this->defaultType = $this->product_types()
            ->where('type', 9)
            ->first();

        return !empty($this->defaultType);
    }

    public function setDefaultVariant()
    {
        $this->hasDefaultType = $this->hasDefaultType();

        if (empty($this->defaultVariant)) {
            $this->defaultType = ProductType::setDefaultType();

            if (!empty($this->defaultType)) {
                $attributes = [
                    'product_type_id' => $this->defaultType->id,
                    'product_id' => $this->id
                ];

                $values = [
                    'product_type_id' => $this->defaultType->id,
                    'product_id' => $this->id,
                    'price' => $this->price,
                    'discount' => $this->discount,
                ];

                $this->defaultVariant = ProductVariant::updateOrCreate($attributes, $values);
                $productType = [
                    'name' => 'Default',
                    'type' => ProductType::TYPE_DEFAULT,
                    'is_saleable' => true,
                ];

                $this->defaultVariant['product_type'] = $productType;
            }
        }
    }

    public function getDefaultVariantAttribute()
    {
        $this->setDefaultVariant();
        return $this->defaultVariant;
    }

    public function getTypesAttribute()
    {
        $types = ProductType::$types;
        $productTypes = [];

        $this->setDefaultVariant();

        foreach ($types as $type => $name) {
            $isSaleable = false;

            $variants = ProductVariant::with([
                'product_type' => function ($query) use ($type) {
                    $query->where('product_types.type', $type);
                }])
                ->where('product_id', $this->id)
                ->get();

            if (!empty($variants) && $variants->count() > 0) {
                $productVariants = [];
                $hasVariants = false;
                foreach ($variants as $variant) {
                    if (!empty($variant->product_type)) {
                        $variant['name'] = $variant->product_type->name;
                        $variant->product_type->label = $name;
                        if ($type === ProductType::TYPE_DEFAULT ||
                            (!empty($variant->price) && $variant->price !== $this->price)) {
                            $isSaleable = true;
                        }
                        $productVariants[] = $variant;
                        $hasVariants = true;
                    }
                }

                $notRequired = [ProductType::TYPE_DEFAULT, ProductType::TYPE_STORE, ProductType::TYPE_BRAND];

                $productTypes[] = [
                    'name' => $name,
                    'type' => $type,
                    'variants' => $productVariants,
                    'is_saleable' => $isSaleable,
                    'is_required' => $hasVariants && !in_array($type, $notRequired),
                    'has_variants' => $hasVariants
                ];
            }
        }

        return $productTypes;
    }

    public function getPriceFormattedAttribute()
    {
        $priceParts = $this->splitPrice($this->price);

        return number_format($priceParts['price'], 0);
    }

    public function getPriceSuperAttribute()
    {
        $priceParts = $this->splitPrice($this->price);
        return $priceParts['super'];
    }

    public function getDiscountFormattedAttribute()
    {
        $priceParts = $this->splitPrice($this->discount);

        return number_format((float)$priceParts['price'], 0);
    }

    public function getDiscountSuperAttribute()
    {
        $priceParts = $this->splitPrice($this->discount);

        return $priceParts['super'];
    }

    public function getDiscountPercentAttribute()
    {
        $totalPrice = $this->price;
        $discountPrice = $this->discount;

        if (empty((integer)$discountPrice)) {
            $discountPrice = $totalPrice;
        }

        $discountPercent = 0;
        if (!empty($discountPercent)) {
            $discountPercent = ($discountPrice - $totalPrice) * 100 / $discountPrice;
            $discountPercent = number_format($discountPercent, 1);
        }

        return $discountPercent;
    }

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        $route = '/product/' . $this->slug;
        return $route;
    }

    /*  * @return string
     */
    public function getStoreAttribute()
    {
        $stores = Store::where('id', $this->store_id)->get();

        $store = ['name' => null, 'route' => null, 'photo_url' => null];
        if (!empty($stores)) {
            $stores = array_map(function ($store) {
                return ['name' => $store['name'], 'route' => $store['route'], 'photo_url' => $store['photo_url']];
            }, $stores->toArray());

            if (!empty($stores[0])) {
                $store = $stores[0];
            }
        }
        return $store;
    }

    /**
     * Get all the types for this product.
     */
    public function product_types()
    {
        return $this->belongsToMany('App\ProductType', 'product_variants', 'product_id', 'product_type_id');
    }

    /**
     * Get the related products
     */
    public function links()
    {
        return $this->belongsToMany('App\Product', 'product_links', 'product_id', 'related_id');
    }

    /**
     * Get the related categories
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_products', 'product_id', 'category_id');
    }

    /**
     * Get the related tags
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tag_products', 'product_id', 'tag_id');
    }

    /**
     * Get all product variants
     */
    public function variants()
    {
        return $this->hasMany('App\ProductVariant');
    }

    /**
     * Get all the photos for this product.
     */
    public function photos()
    {
        return $this->hasMany('App\ProductPhoto');
    }

    public function updateAncestryIds($storeCategory)
    {
        $values = [
            'category_id' => $storeCategory->category_id,
            'product_id' => $this->id
        ];

        CategoryProduct::updateOrCreate($values, $values);

        if (!empty($storeCategory->parent_id)) {
            return $this->updateAncestryIds($storeCategory->previous);
        }
    }

    public function updateCategories($categories)
    {
        $parentCategoryId = null;
        foreach ($categories as $key => $categoryName) {
            $slug = str_slug($categoryName);

            $attributes = $values = [
                'slug' => $slug
            ];

            $values = [
                'name' => $categoryName,
                'level' => $key + 1,
                'order' => 1,
                'description' => $categoryName,
                'category_id' => $parentCategoryId
            ];

            $category = \App\Category::updateOrCreate($attributes, $values);
            $parentCategoryId = $category->id;

            $values = [
                'category_id' => $category->id,
                'product_id' => $this->id
            ];

            CategoryProduct::updateOrCreate($values, $values);
        }
    }
}
