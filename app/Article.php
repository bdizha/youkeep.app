<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
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
        'heading',
        'categories',
        'breadcrumbs'
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
     * @return array
     */
    public function getBreadcrumbsAttribute(): array
    {
        $breadcrumbs = $this->category->breadcrumbs;

        $breadcrumbs[] = [
            'id' => $this->id,
            'slug' => $this->slug,
            'route' => '/help/article/' . $this->slug,
            'name' => $this->title,
            'has_articles' => true,
            'has_categories' => true,
            'categories' => [],
        ];

        return $breadcrumbs;
    }

    /**
     * @return string
     */
    public function getRouteAttribute(): string
    {
        return '/resource/' . $this->slug;
    }

    /**
     * @return string
     */
    public function getPhotoAttribute()
    {
        $rand = str_pad(rand(1, 17), 2, "0", STR_PAD_LEFT);
        return "/patterns/pattern-{$rand}.svg";
    }

    /**
     * @return string
     */
    public function getHeadingAttribute(): string
    {
        $titleParts = explode(' ', $this->title);
        $countParts = count($titleParts);

        $counter = floor($countParts / 2);

        if ($counter > 2) {
            --$counter;
        }

        foreach ($titleParts as $key => $titlePart) {
            if ($key < $counter) {
                $titleParts[$key] = "<span class='r-text-yellow'>{$titlePart}</span>";
            }
        }
        return implode(" ", $titleParts);
    }

    /**
     * @return array
     */
    public function getCategoriesAttribute(): array
    {
        $categories = [];
        $categoryArticles = CategoryArticle::where('article_id', $this->id)
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

    /**
     * Get the article's category
     */
    public function category()
    {
        return $this->belongsTo('App\ArticleCategory', 'article_category_id', 'id')->withDefault();
    }
}
