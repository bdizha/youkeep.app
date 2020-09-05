<?php

namespace App;

use Illuminate\Support\Arr;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 */
class Category extends Model
{
    use Sluggable;

    public const TYPE_STORE = 1;
    public const TYPE_PRODUCT = 2;

    public static $types = [
        self::TYPE_STORE => 'Store',
        self::TYPE_PRODUCT => 'Product'
    ];

    protected $products = [];

    /**
     * @var string[]
     */
    private $ignoredPhotos = ['d2fda6827655f4795e9f288f7404358a069fe1ce'];

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
        'route',
        'breadcrumbs',
        'photos',
        'photo',
        'filters',
        'products',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * @return bool
     */
    public function getRouteAttribute()
    {
        if ($this->type !== 1) {
            $route = '/store/' . $this->store->slug . '/category/' . $this->slug;
        } else {
            $route = '/stores/' . $this->slug;
        }

        return $route;
    }

    /**
     * @return array
     */
    public function getBreadcrumbsAttribute()
    {
        $breadcrumbs = [];
        return array_reverse($breadcrumbs);
        $breadcrumbs = $this->getBreadcrumbs($this, $breadcrumbs);
    }

    /**
     * Get the products
     */
    public function getProductsAttribute()
    {
        $this->products = [];

        if ($this->type !== self::TYPE_STORE) {
            $this->products = Product::whereHas('categories', function ($query) {
                $query->where('category_products.category_id', $this->id);
            })
                ->where('is_active', true)
                ->orderBy('created_at', 'desc')
                ->paginate(12);
        }

        return $this->products;
    }

    /**
     * Get all the types for this product.
     */
    public function getFiltersAttribute()
    {
        $filters = [];

        foreach (ProductType::$types as $type => $name) {
            $productTypes = ProductType::whereHas('variants', function ($query) {
                $query->whereHas('product', function ($query) {
                    $query->whereHas('categories', function ($query) {
                        $query->where('category_products.category_id', $this->id);
                    });
                });
            })
                ->where('is_active', false)
                ->where('type', $type)
                ->get();

            if ($productTypes->toArray()) {
                $filters[] = [
                    'name' => $name,
                    'type' => $type,
                    'items' => $productTypes->toArray()
                ];
            }

        }

        return $filters;
    }

    /**
     * @return array
     */
    public function getPhotosAttribute()
    {
        $photos = [];

        if (empty($this->products)) {
            $this->products = $this->getProductsAttribute();
        }

        foreach ($this->products as $product) {
            if (count($photos) > 5) break;

            $photo = $product->thumbnail;

            if (!in_array($photo, $this->ignoredPhotos)) {
                if (file_exists(public_path('storage/product/' . $photo))) {
                    $photos[] = url('/storage/product/' . $photo);
                }
            }
        }

        if (count($photos) >= 6) {
            $photos = Arr::random($photos, min(6, count($photos)));
        }
        return $photos;
    }

    /**
     * @return string
     */
    public function getPhotoAttribute()
    {
        $photos = $this->getPhotosAttribute();

        if (empty($photos)) {
            return null;
        }
        return $photos[rand(0, count($photos) - 1)];;
    }

    /**
     * @param $category
     * @param $breadcrumbs
     * @return mixed
     */
    private function getBreadcrumbs($category, $breadcrumbs)
    {
        if (!empty($category->category_id)) {
            $breadcrumbs[] = [
                'id' => $category->id,
                'slug' => $category->slug,
                'route' => $category->route,
                'name' => $category->name,
                'has_products' => $category->has_products,
                'has_categories' => $category->has_categories,
                'categories' => [],
            ];
        }

        if (empty($category->category)) {
            return $breadcrumbs;
        }
        return $this->getBreadcrumbs($category->category, $breadcrumbs);
    }

    /**
     * Get the category parent
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    /**
     * Get the categories
     */
    public function categories()
    {
        return $this->hasMany('App\Category', 'category_id', 'id')
            ->take(12);
    }

    /**
     * Get the stores
     */
    public function stores()
    {
        return $this->belongsToMany('App\Store', 'store_categories', 'category_id', 'store_id')
            ->take(12);
    }

    /**
     * Get the category stores
     */
    public function store()
    {
        return $this->belongsTo('App\Store', 'store_id', 'id');
    }

}
