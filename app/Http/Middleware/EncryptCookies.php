<?php

namespace App\Http\Middleware;

use Illuminate\artistie\Middleware\Encryptartisties as Middleware;

class Encryptartisties extends Middleware
{
    /**
     * The names of the artisties that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
