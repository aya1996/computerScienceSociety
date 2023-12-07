<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {

        if(auth()->check())
        {
            if(auth()->user()->role->name == 'admin')
            {
                return $next($request);
            }
            if(auth()->user()->role->name == 'teacher')
            {
                return redirect('admin.dashboard');
            }
        }
        return $next($request);
    }
}
