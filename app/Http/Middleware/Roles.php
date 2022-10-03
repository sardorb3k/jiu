<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if user has the role This check will depend on how your roles are set up
        if ($request->user()->role != $role) {
            // Error 404
            abort(404);
        }

        return $next($request);
    }
}
