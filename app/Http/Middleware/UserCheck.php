<?php

namespace Venue\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class UserCheck
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
        $route=Route::getCurrentRoute();

        if(Auth::check())
        {
            if($route->getAction()['role']!=Auth::user()->user_type_id)
            {
                return redirect()->route('home');
            }

        }

        return $next($request);
    }
}
