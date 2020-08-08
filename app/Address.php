<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public static $types = [
        1 => 'Delivery',
        2 => 'Business',
        3 => 'Billing',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_line', 'address_line_2', 'suburb', 'postal_code', 'city', 'province', 'country_id', 'user_id', 'is_default', 'type',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_default' => 'bool',
    ];

    /**
     * Get the province that has the address.
     */
    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    /**
     * Get the city that has the suburb.
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * Get the user that has the address.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the country that has the suburb.
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
