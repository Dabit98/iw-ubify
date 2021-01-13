<?php

namespace App\Http\Middleware;

use Closure;

class DriverAdmin
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
        if ($request->user() == NULL) {
            return abort('403',"NO TIENES ACCESO A ESTE SITIO WEB");
        }

        if ($request->user()->email == "admin@admin") {
            return $next($request);
        }

        if (strpos($request->user()->email, "@driver.")) {
            return $next($request);
        }
        return abort('403',"NO TIENES ACCESO A ESTE SITIO WEB");
    }
}
