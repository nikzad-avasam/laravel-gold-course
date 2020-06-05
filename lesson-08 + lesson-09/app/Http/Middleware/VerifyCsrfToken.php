<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        '/test-request',
        'action',
        'action/*',
        'method/*',
        'method-post/',
        'json',
        'boolean',
        'register',
        'get-json-data',
        'upload',
    ];
}
