<?php

namespace App\Http\Middleware;

use Closure;

class CheckTeacher
{
    public function handle($request, Closure $next)
    {

        if(auth()->check())
        {
            if(auth()->user()->role->name == 'teacher')
            {
                return $next($request);
            }
            else
            {
                return redirect('admin.dashboard');
            }
        }
        return $next($request);
    }
}
