<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ArticleResource extends Model
{
    use Sluggable;

    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'route',
        'photo',
        'categories',
    ];
    /**
     * @var mixed
     */
    private $id;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        $route = '/resource/' . $this->slug;
        return $route;
    }

    /**
     * @return string
     */
    public function getPhotoAttribute()
    {
        $rand = str_pad(rand(1, 17), 2, "0", STR_PAD_LEFT);
        $photo = "/patterns/patterns-{$rand}.svg";
        return $photo;
    }

    /**
     * @return array
     */
    public function getCategoriesAttribute(): array
    {
        $categories = [];
        $categoryArticles = CategoryArticle::where('article_resource_id', $this->id)
            ->with('category')
            ->get();

        foreach ($categoryArticles as $categoryArticle) {
            $categories = [
                'slug' => $categoryArticle->category->slug,
                'name' => $categoryArticle->category->name
            ];
        }

        return $categories;
    }
}
