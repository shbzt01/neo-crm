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
        if ($user && $user->user_info->role == 'Support Staff') {
            return $next($request);
        }

        return response('Unauthorized.', 401);
    }
}
