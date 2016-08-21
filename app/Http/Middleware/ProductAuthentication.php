<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ProductAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        dd(Auth::attempt([
//            'email' => 'hills.gene@lebsack.info',
//            'password' => 'abcss'
//        ]));

//        dd($request);
        return $next($request);
    }
}