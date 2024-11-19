<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if (in_array($userRole, $roles)) {
                return $next($request);
            }

            if ($userRole === 'user') {
                return redirect()->route('movie.index')->with('error', 'You are redirected to movie index.');
            }

            if ($userRole === 'admin') {
                return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page!');
            }
        }

        return redirect()->route('welcome')->with('error', 'You need to log in first!');
    }

}
