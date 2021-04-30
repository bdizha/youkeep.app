<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use Sluggable;

    public static $departments = [
        1 => 'Marketing',
        2 => 'Business Development',
        3 => 'Engineering',
        4 => 'Data Engineering',
        5 => 'Member Experience',
        6 => 'Engineering',
        7 => 'Product',
        8 => 'Data Science',
        9 => 'Management',
        10 => 'Operations',
        11 => 'Corporate',
        12 => 'Cloud Security Engineer',
        13 => 'Legal',
    ];

    public static $types = [
        1 => 'Full-time',
        2 => 'Contract'
    ];

    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'department',
        'type_formatted',
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
                'source' => 'title'
            ]
        ];
    }

    public function getDepartmentAttribute()
    {
        return !empty(self::$departments[$this->department_type]) ? self::$departments[$this->department_type] : null;
    }

    public function getTypeFormattedAttribute()
    {
        return !empty(self::$types[$this->type]) ? self::$types[$this->type] : null;
    }

    /**
     * Get the city that has the position.
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * Get the applicants that has the position.
     */
    public function position_applicants()
    {
        return $this->belongsTo('App\PositionApplicant');
    }
}
