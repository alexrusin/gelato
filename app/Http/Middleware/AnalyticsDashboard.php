<?php

namespace App\Http\Middleware;

use Closure;

class AnalyticsDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($request->dashboardPassword !== 'analytics') {
            return redirect()->route('home-page');
        }

        return $next($request);
    }
}
