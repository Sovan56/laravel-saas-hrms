<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureCompanyScope
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->company_id) {
            abort(403, 'Company scope missing.');
        }

        return $next($request);
    }
}
