<?php

namespace Venue\Http\Middleware;

use Closure;

class Usercheck
{

    public function handle($request, Closure $next)
    {
        $route = Route::getCurrentRoute();
        if (Auth::check()) {
            if ($route->getAction()['role'] == 1) {
                return redirect()->route('admin.dashboard');
            }
            else if ($route->getAction()['role'] == 2) {
                return redirect()->route('manager.dash');
            }
            else {
                return redirect()->to('/');
            }
        }
        return $next($request);
    }

}