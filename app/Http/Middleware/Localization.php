<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //    Check header request
        if (session()->has('locale')) {
        // set laravel localization
            App::setLocale(session()->get('locale'));
        }
        /**
     * requests hasHeader is used to check the Accept-Language header from the REST API's
     */
    if ($request->hasHeader("Lang")) {
        /**
         * If Accept-Language header found then set it to the default locale
         */
        App::setLocale($request->header("lang"));
    }
        // continue request
        return $next($request);
    }
    // url
    // App::setlocale($request->lang);
    // \App::setLocale($request->lang);
}
