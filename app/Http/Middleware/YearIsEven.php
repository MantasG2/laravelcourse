<?php namespace App\Http\Middleware;

use Closure;

class YearIsEven
{
    public function handle($request, Closure $next)
    {
        if (date('Y') < 18) {
        return redirect('/home');
    }

        return $next($request);
    }
}
