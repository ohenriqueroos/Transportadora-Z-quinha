<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class blockLogin
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
        if ($request->session()->has('users')) {
            return redirect('/');
        } else {
            return $next($request);
        }
    }
}