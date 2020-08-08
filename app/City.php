<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use DB;

class City extends Model
{
    use Sluggable;

    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'label',
        'description_html',
    ];

    public function getLabelAttribute()
    {
        return $this->name;
    }

    public function getDescriptionHtmlAttribute()
    {
        $description = !empty($this->description) ? nl2br($this->description) : '';
        return str_replace('<br />', "<p></p>", $description);
    }

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
     * Get the province that has the city.
     */
    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    /**
     * Get the suburbs for the city.
     */
    public function suburbs()
    {
        return $this->hasMany('App\Suburb', 'city_id', 'id');
    }
}
