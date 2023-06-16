<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RateLimitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $maxAttempts = 300; 
        $decaySeconds = 60; 

        $key = $request->ip();

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            return new Response('Too Many Attempts.', 429);
        }

        RateLimiter::hit($key, $decaySeconds);

        return $next($request);
    }
}
