<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{

    /**
     * Get all the photos for this object.
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /**
     * Get the category for this object.
     */
    public function category()
    {
        return $this->hasMany('App\ArticleCategory');
    }
}
