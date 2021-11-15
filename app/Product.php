<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Carbon;
use Mockery\Exception;

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
        1 => '#F56F45',
        2 => '#F56F4545'
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
        'route',
        'currency',
        'activity',
        'currency_url'
    ];

    protected $defaultType = null;
    protected $defaultVariant = null;
    protected $hasDefaultType = false;

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

    public function getActivityAttribute()
    {
        return Carbon::now()->addMinutes(-rand(0, 1000000))->diffForHumans();
    }

    public function getThumbnailUrlAttribute()
    {
        $thumbnail = (!empty($this->thumbnail) ? $this->thumbnail : $this->photo);

        $isUrl = strpos($thumbnail, 'http') !== false;
        return $isUrl ? $thumbnail : url('/storage/product/' . $thumbnail);
    }

    public function getPhotoUrlAttribute()
    {
        $isUrl = strpos($this->photo, 'http') !== false;
        return $isUrl ? $this->photo : url('/storage/product/' . $this->photo);
    }

    public function getCurrencyAttribute()
    {
        $productCurrency = ProductCurrency::where('product_id', $this->id)
            ->first();

        return !empty($productCurrency->currency) ? $productCurrency->currency->code : null;
    }

    public function getCurrencyUrlAttribute()
    {
        $productCurrency = ProductCurrency::where('product_id', $this->id)
            ->first();

        return !empty($productCurrency->currency) ? '/currencies/' . $productCurrency->currency->code . '.svg' : null;
    }

    public function getHasPhotoAttribute()
    {
        return !empty($this->photo);
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
        return !empty($this->product_type->color) && !empty(self::$color_codes[$this->product_type->color]) ? strtoupper(self::$color_codes[$this->product_type->color]) : '#3D4852';
    }

    public function getPriceWholeAttribute()
    {
        return number_format($this->price, 0);
    }

    public function getDefaultVariantAttribute()
    {
        return null;
    }

    public function setDefaultVariant()
    {
        $this->hasDefaultType = $this->hasDefaultType();

        if (empty($this->defaultVariant)) {
            $this->defaultType = ProductType::getDefaultType();

            if (!empty($this->defaultType)) {
                $attributes = [
                    'product_type_id' => $this->defaultType->id,
                    'product_id' => $this->id
                ];

                $values = [
                    'product_type_id' => $this->defaultType->id,
                    'product_id' => $this->id,
                    'price' => (int)$this->price,
                    'discount' => (int)$this->discount,
                    'required_min' => 1,
                    'required_max' => 1
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

    /**
     * @return Bool
     */
    private function hasDefaultType()
    {
        $this->defaultType = $this->product_types()
            ->where('type', ProductType::TYPE_DEFAULT)
            ->first();

        return !empty($this->defaultType);
    }

    /**
     * Get all the types for this service.
     */
    public function product_types()
    {
        return $this->belongsToMany('App\ProductType', 'product_variants', 'product_id', 'product_type_id');
    }

    public function getTypesAttribute()
    {
        $types = ProductType::$types;
        $productTypes = [];

//        $this->setDefaultVariant();

        foreach ($types as $type => $name) {
            $isSaleable = false;

            $variants = ProductVariant::with([
                'product_type' => function ($query) use ($type) {
                    $query->where('product_types.type', $type)
                        ->where('product_types.type', '!=', ProductType::TYPE_DEFAULT);
                }])
                ->whereNull('product_variant_id')
                ->where('product_id', $this->id)
                ->get();

            if (!empty($variants) && $variants->count() > 0) {
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
                    'variants' => [],
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
        $price = 0;
        try {
            $priceParts = $this->splitPrice($this->price);
            $price = number_format((float)$priceParts['price'], 0);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return $price;

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

    /*  * @return string
     */

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        return '/asset/' . md5(time() . $this->slug) . '/' . $this->slug;
    }

    public function getStoreAttribute()
    {
        return Store::where('id', $this->store_id)->first();
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
        return $this->belongsToMany('App\StoreCategory', 'category_products', 'product_id', 'category_id');
    }

    /**
     * Get the associated store
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    /**
     * Get the related tags
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tag_products', 'product_id', 'tag_id');
    }

    /**
     * Get all the photos for this service.
     */
    public function photos()
    {
        return $this->hasMany('App\ProductPhoto');
    }

    /**
     * Get the related values
     */
    public function product_values()
    {
        return $this->hasMany('App\ProductValue')->take(24);
    }

    /**
     * Get the related events
     */
    public function events()
    {
        return $this->hasMany('App\Event', 'item_id', 'id')->take(24);
    }

    public function updateAncestryIds()
    {
        return;
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
