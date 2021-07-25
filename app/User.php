<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const TYPE_SHOPPER = 1;
    const TYPE_ARTIST = 2;
    const TYPE_MERCHANT = 3;
    const TYPE_ADMIN = 4;

    const IDENTITY_TYPE_PASSPORT = 1;
    const IDENTITY_TYPE_NATIONAL_ID = 2;

    public static $types = [
        self::TYPE_SHOPPER => 'Shopper',
        self::TYPE_ARTIST => 'Artist',
        self::TYPE_MERCHANT => 'Merchant',
        self::TYPE_ADMIN => 'Admin'
    ];

    public static $identity_types = [
        self::IDENTITY_TYPE_PASSPORT => 'Passport',
        self::IDENTITY_TYPE_NATIONAL_ID => 'National ID'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'activated',
        'password',
        'phone_number',
        'birth_date',
        'bio',
        'address_id',
        'can_send_sms',
        'can_send_app',
        'can_send_email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be appended for arrays.
     *
     * @var array
     */
    protected $appends = [
        'first_name',
        'last_name',
        'address',
    ];

    public function getFirstNameAttribute()
    {
        $nameParts = explode(" ", $this->name);
        return !empty($nameParts[0]) ? $nameParts[0] : null;
    }

    /**
     * Get the address that has the user.
     */
    public function getAddressAttribute()
    {
        $address = Address::where('user_id', $this->id)
            ->where('is_default', true)
            ->orderBy('created_at', 'DESC')
            ->first();

        return !empty($address) ? $address : new Address();
    }

    public function getLastNameAttribute()
    {
        $nameParts = explode(" ", $this->name);
        return !empty($nameParts[1]) ? $nameParts[1] : null;
    }

    /**
     * Get the related addresses
     */
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
     * Get the related cards
     */
    public function cards()
    {
        return $this->hasMany('App\Cards');
    }

    /**
     * Get the related merchants
     */
    public function merchants()
    {
        return $this->hasMany('App\Merchant');
    }

    /**
     * Get the related stores
     */
    public function stores()
    {
        return $this->hasMany('App\Stores');
    }
}
