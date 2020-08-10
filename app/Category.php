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
        $route = '/';
        if (!empty($this->store)) {
            $route = '/store/' . $this->store->slug . '/category/' . $this->slug;
        }

        return $route;
    }

    /**
     * @return array
     */
    public function getBreadcrumbsAttribute()
    {
        $breadcrumbs = [];
        $breadcrumbs = $this->getBreadcrumbs($this, $breadcrumbs);
        return array_reverse($breadcrumbs);
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
        $products = Product::whereHas('categories', function ($query) {
            $query->where('category_products.category_id', $this->id);
        })
            ->where('is_active', true)
            ->get();

        foreach ($products as $product) {

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
        $photos = [];
        foreach ($this->products as $product) {
            $photo = $product->thumbnail;
            if (!in_array($photo, $this->ignoredPhotos)) {
                $photos[] = url('/storage/product/' . $photo);
            }
        }

        if (empty($photos)) {
            return null;
        }

        $photo = $photos[rand(0, count($photos) - 1)];
        return $photo;
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
     * Get the products
     */
    public function products()
    {
        return $this->belongsToMany('App\Product', 'category_products', 'category_id', 'product_id')->take(12);
    }

    /**
     * Get the categories
     */
    public function categories()
    {
        return $this->hasMany('App\Category', 'category_id', 'id')->take(12)->has('products', '>=', 1);
    }

    /**
     * Get the category stores
     */
    public function store()
    {
        return $this->belongsTo('App\Store', 'store_id', 'id');
    }

    /*
     *
     * Calculate category children recursively,
     * only include products conditionally
     *
     * @param array $category
     * @param bool $hasProducts
     */
    public function children($parent = null)
    {
        return $parent;
        $query = self::orderBy('created_at', 'DESC');

        if (empty($parent)) {
            $parent = $this;
        }

        if ($parent->level > 2) {

        }

        $query->where('category_id', $parent->id);

        $categories = $query->get();

        if (!empty($categories)) {
            foreach ($categories as $key => $category) {
                $parent['catalog'][] = $this->children($category);
            }
        }
        return $parent;
    }

}
