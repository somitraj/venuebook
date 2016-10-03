<?php

namespace Venue\Http\Middleware;

use Closure;

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
//        $route=Route::getCurrentRoute();
//        if(Auth::check())
//        {
//            if($route->getAction()['role']==1)
//            {
//                return redirect()->route('admin.dash');
//            }
//            else if($route->getAction()['role']==2)
//            {
//                return redirect()->route('manager.dash');
//            }
//            else
//            {
//                return redirect()->to('/');
//            }
//        }

        return $next($request);
    }
}
