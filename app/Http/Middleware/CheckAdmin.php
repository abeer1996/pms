<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if(auth()->user()->role=='admin' || auth()->user()->role=='manager' || auth()->user()->role=='employee')  
        {
            return $next($request);
        }
        return redirect()->back()->withErrors('You are not permit.');
    }
} 
