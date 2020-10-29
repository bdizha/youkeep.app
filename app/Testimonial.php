<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'rating',
        'html_content',
    ];


    public function getRatingAttribute()
    {
        return rand(1, 5);
    }

    public function getHtmlContentAttribute()
    {
        return addslashes($this->content);
    }
}
