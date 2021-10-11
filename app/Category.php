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
        self::TYPE_PRODUCT => 'Category'
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
        'route',
        'breadcrumbs',
        'photos',
        'photo_url',
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
            $route = '/category/' . $this->slug;
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
        return $this->getBreadcrumbs($this, []);
    }

    /**
     * Get the products
     */
    public function getProductsAttribute()
    {
        $this->products = [];

        if ($this->type == self::TYPE_PRODUCT) {
            $this->products = Product::whereHas('categories', function ($query) {
                $query->where('category_products.category_id', $this->id);
            })
                ->where('is_active', true)
                ->orderBy('created_at', 'desc')
                ->paginate(24);
        }

        return $this->products;
    }

    /**
     * Get all the types for this category.
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
                ->where('type', $type)
                ->orderBy('name', 'ASC')
                ->get();

            if (!empty($productTypes)) {
                $filters[] = [
                    'name' => $name,
                    'type' => $type,
                    'per_row' => ProductType::$lengths[$type],
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

            if (!in_array($photo, $this->ignoredPhotos) && !empty($photo)) {
                if (file_exists(public_path('storage/service/' . $photo))) {
                    $photos[] = url('/storage/service/' . $photo);
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
    public function getPhotoUrlAttribute()
    {
        if($this->type === self::TYPE_STORE && !empty($this->photo)){
            return url('/storage/category/' . $this->photo);
        }
        else{
            $photos = $this->getPhotosAttribute();
            if (empty($photos)) {
                return null;
            }
            return $photos[rand(0, count($photos) - 1)];
        }
    }

    /**
     * @param $category
     * @param $breadcrumbs
     * @return mixed
     */
    private function getBreadcrumbs($category, $breadcrumbs)
    {
        $breadcrumbs[] = [
            'id' => $category->id,
            'slug' => $category->slug,
            'route' => $category->route,
            'name' => $category->name,
            'has_products' => $category->has_products,
            'has_categories' => $category->has_categories,
            'categories' => [],
        ];

        if (empty($category->category)) {
            return $breadcrumbs;
        }
        return $this->getBreadcrumbs($category->category, $breadcrumbs);
    }

    /**
     * Get the categories
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'store_categories', 'parent_id', 'id');
    }

    /**
     * Get the stores
     */
    public function category_stores()
    {
        return $this->belongsToMany('App\Store', 'store_categories', 'category_id', 'store_id');
    }

    /**
     * Get the category stores
     */
    public function stores()
    {
        return $this->hasMany('App\Store');
    }

    /**
     * Get the associated app categories
     */
    public function app_categories()
    {
        return $this->hasMany('App\AppCategory');
    }

}
