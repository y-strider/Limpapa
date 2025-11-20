<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            // Redirect unauthenticated users to the login page.
            return redirect('login');
        }

        $userRole = Auth::user()->role;
        if (!in_array($userRole, $roles)) {
            // If the user's role is not in the allowed roles, return a 403 Unauthorized error.
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}