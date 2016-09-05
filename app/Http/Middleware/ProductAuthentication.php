<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ProductAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

//        dd(Auth::check());
//        Apply this middleware for every other request
//        if(!$request->is('login'))
//        {
//            if(!Auth::check()){
//                return redirect('login');
//            }
//        }
        return $next($request);
    }
}