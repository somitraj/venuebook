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


        if(Auth::check())
        {
            $route=Route::getCurrentRoute()->getAction();

            if(array_key_exists('role',$route))
            {
                /*if ($route->getAction()['role'] != Auth::user()->user_type_id)*/
                if(Auth::user()->user_type_id!=$route['role']){
                    return redirect()->route('home');
                }
            }

        }

        return $next($request);
    }
}
