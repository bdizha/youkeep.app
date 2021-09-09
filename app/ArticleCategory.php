<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArticleCategory extends Model
{
    use Sluggable;

    public const TYPE_HELP = 1;
    public const TYPE_BLOG = 2;
    public const TYPE_DOCS = 3;

    public static $types = [
        self::TYPE_HELP => 'Help',
        self::TYPE_BLOG => 'Blog',
        self::TYPE_DOCS => 'Docs'
    ];

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
        'breadcrumbs',
        'route'
    ];

    /**
     * @return string
     */
    public function getRouteAttribute()
    {
        return $this->slug;
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
     * @param $articleCategory
     * @param $breadcrumbs
     * @param int $limit
     * @return mixed
     */
    private function getBreadcrumbs($articleCategory, $breadcrumbs, int $limit = 3)
    {
        $breadcrumbs[] = [
            'id' => $articleCategory->id,
            'slug' => $articleCategory->slug,
            'route' => $articleCategory->slug,
            'name' => $articleCategory->name,
            'has_articles' => true,
            'has_categories' => true,
            'categories' => [],
        ];

        if (empty($articleCategory->parent->id)) {
            return $breadcrumbs;
        }

        $limit--;
        if($limit === 0){
            return $breadcrumbs;
        }
        else if ($limit < 0){
            dd($limit);
        }

        return $this->getBreadcrumbs($articleCategory->parent, $breadcrumbs, $limit);
    }

    /**
     * Get the articles
     */
    public function articles(): HasMany
    {
        return $this->hasMany('App\Article', 'article_category_id', 'id');
    }
    /**
     * Get the parent
     */
    public function article_type(): BelongsTo
    {
        return $this->belongsTo('App\ArticleType', 'article_type_id', 'id');
    }

    /**
     * Get the parent
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo('App\ArticleCategory', 'article_category_id', 'id');
    }
}
