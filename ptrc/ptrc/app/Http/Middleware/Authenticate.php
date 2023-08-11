<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // print_r($request->route()->gatherMiddleware());
        // print_r($request->route());
        // exit;


        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}