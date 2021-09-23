<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShowDate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $now = date_create()->format('l jS \of F Y h:i A');
        echo $now;

        return $next($request);
    }
}
