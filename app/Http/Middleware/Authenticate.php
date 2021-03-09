<?php

namespace App\Http\Middleware;

use Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *http://localhost/lar.com/admin/login is("admin/*")
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Request::is('admin/*'))
                return route("admin.login.form");
            else
                return route('login');
        }
    }
}
