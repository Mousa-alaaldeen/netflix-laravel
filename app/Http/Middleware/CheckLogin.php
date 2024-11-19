<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
      
        if (auth()->check()) {
            return redirect()->route('movie.index');
        }

    
        return $next($request);
    }
}
