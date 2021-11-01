<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN artistie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpartistie = true;

    /**
     * The URIs that should be excluded from CSRF confirmation.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
