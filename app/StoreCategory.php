<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * Class StoreCategory
 * @package App
 */
class StoreCategory extends Model
{
    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'breadcrumbs',
        'route',
        'name',
        'photos',
        'photo',
        'filters',
        'products'
    ];

    protected $products = [];

    /**
     * @var string[]
     */
    private $ignoredPhotos = ['d2fda6827655f4795e9f288f7404358a069fe1ce'];

    /**
     * @return bool
     */
    public function getRouteAttribute()
    {
        $route = '/category/' . $this->category->slug;
        $route .= '--' . $this->id;
        $route .= $this->_encodeLevel($this->level);

        return $route;
    }

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->category->name;
    }

    /**
     * @return string
     */
    public function getSlugAttribute()
    {
        return $this->category->slug;
    }

    /**
     * Get all the types for this category.
     */
    public function getFiltersAttribute()
    {
        $filters = [];

        foreach (ProductType::$types as $type => $name) {
            $productTypes = ProductType::whereHas('variants', function ($query) {
                $query->whereHas('service', function ($query) {
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
     * Get the products
     */
    public function getProductsAttribute()
    {
        $products = Product::whereHas('categories', function ($query) {
            $query->where('category_products.category_id', $this->id);
        })
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(24);

        return $products;
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
     * Get the category parent
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the store parent
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    /**
     * Get the categories
     */
    public function categories()
    {
        return $this->hasMany('App\StoreCategory', 'parent_id', 'id');
    }

    /**
     * Get the categories
     */
    public function banners()
    {
        return $this->hasMany('App\Banner');
    }

    /**
     * Get the parent
     */
    public function previous()
    {
        return $this->belongsTo('App\StoreCategory', 'parent_id', 'id');
    }

    /**
     * @param $storeCategory
     * @param $breadcrumbs
     * @param int $limit
     * @return mixed
     */
    private function getBreadcrumbs($storeCategory, $breadcrumbs, int $limit = 3)
    {
        $breadcrumbs[] = [
            'id' => $storeCategory->id,
            'slug' => $storeCategory->category->slug,
            'route' => $storeCategory->route,
            'name' => $storeCategory->category->name,
            'has_products' => $storeCategory->has_products,
            'has_categories' => $storeCategory->has_categories,
            'categories' => [],
        ];

        if (empty($storeCategory->previous->id)) {
            return $breadcrumbs;
        }

        $limit--;
        if($limit === 0){
            return $breadcrumbs;
        }
        else if ($limit < 0){
            dd($limit);
        }

        return $this->getBreadcrumbs($storeCategory->previous, $breadcrumbs, $limit);
    }

    /**
     * @param null $level
     * @return string
     */
    protected function _encodeLevel($level = null): string
    {
        return "/L" . str_pad(empty($level) ? 1 : $level, 6, STR_PAD_LEFT, "0");
    }

    /**
     * @return array
     */
    public function getBreadcrumbsAttribute()
    {
        $breadcrumbs = $this->getBreadcrumbs($this, []);

        return array_reverse($breadcrumbs);
    }

    /**
     * @return array
     */
    public function getLevelPaddedAttribute()
    {
        return "/L" . str_pad(empty($this->level) ? 1 : $this->level, 6, STR_PAD_LEFT, "0");
    }
}
