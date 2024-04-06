<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesTeamMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user && ($user->userInfo->role == 'Sales Team' || $user->userInfo->role == 'admin')) {
            return $next($request);
        }

        return response('Unauthorized.', 401);
    }
}
