<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::get("locale") != null && !in_array(Session::get(Session::get("locale")) ,['tr','en'])) {
            App::setLocale(Session::get("locale"));
        } else {
            Session::put("locale","tr");
            App::setLocale(Session::get("locale"));
        }

        return $next($request);
    }
}
