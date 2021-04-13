<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'breadcrumbs',
        'level_padded'
    ];

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
     * Get the parent
     */
    public function previous()
    {
        return $this->belongsTo('App\StoreCategory', 'parent_id', 'id');
    }

    /**
     * @param $storeCategory
     * @param $breadcrumbs
     * @return mixed
     */
    private function getBreadcrumbs($storeCategory, $breadcrumbs)
    {
        $breadcrumbs[] = [
            'id' => $storeCategory->category_id,
            'slug' => $storeCategory->category->slug,
            'route' => $storeCategory->category->route . $this->_encodeLevel($storeCategory->level),
            'name' => $storeCategory->category->name,
            'has_products' => $storeCategory->has_products,
            'has_categories' => $storeCategory->has_categories,
            'categories' => [],
        ];

        if (empty($storeCategory->previous)) {
            return $breadcrumbs;
        }
        return $this->getBreadcrumbs($storeCategory->previous, $breadcrumbs);
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
        $breadcrumbs = [];

        $breadcrumbs = $this->getBreadcrumbs($this, $breadcrumbs);

        return array_reverse($breadcrumbs);

        "/L" . str_pad(empty($this->level) ? 1 : $this->level, 6, STR_PAD_LEFT, "0");
    }

    /**
     * @return array
     */
    public function getLevelPaddedAttribute()
    {
        return "/L" . str_pad(empty($this->level) ? 1 : $this->level, 6, STR_PAD_LEFT, "0");
    }
}
