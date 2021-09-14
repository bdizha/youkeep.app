<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    use Sluggable;

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
        'breadcrumbs'
    ];

    /**
     * @return array
     */
    public function getBreadcrumbsAttribute()
    {
        $breadcrumbs = [];
        $breadcrumbs[] = [
            'id' => null,
            'slug' => null,
            'route' => '/help',
            'name' => 'Spazaland Help',
            'has_articles' => true,
            'has_categories' => true,
            'categories' => [],
        ];

        $breadcrumbs[] = [
            'id' => null,
            'slug' => null,
            'route' => null,
            'name' => $this->name,
            'has_articles' => true,
            'has_categories' => true,
            'categories' => [],
        ];

        return $breadcrumbs;
    }
}
