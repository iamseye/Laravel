<?php

namespace App\Http\Middleware;

use Closure;


class RedirectIfNotManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!$request->user()->isAManager())
        {
            return redirect('article');
        }

        return $next($request);
    }
}
