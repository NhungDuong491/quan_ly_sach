<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Statusmiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->status==1)
            {

                return $next($request);
            }
            else if(Auth::user()->status==0)
            {
                return redirect()->route('admin.getotp');
            }
        }
       
        else if(!Auth::check())
        {
            return $next($request);
        }
    }
}
