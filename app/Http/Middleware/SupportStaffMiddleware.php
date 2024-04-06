<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportStaffMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user && ($user->userInfo->role == 'Support Staff' || $user->userInfo->role == 'admin')) {
            return $next($request);
        }

        return response('Unauthorized.', 401);
    }
}
