<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
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
        if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('languages'))) {
          App::setlocale(Session()->get('applocale'));
        }
        return $next($request);
    }
}
