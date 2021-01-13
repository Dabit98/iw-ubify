<?php

namespace App\Http\Middleware;

use Closure;

class DriverMiddleware
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

        /*if ($request->user()->email != "admin@admin") {
            return abort('403',"NO TIENES ACCESO A ESTE SITIO WEB");
        }*/

        if (!strpos($request->user()->email, "@driver.") !== false) {
            return abort('403',"NO TIENES ACCESO A ESTE SITIO WEB");
        }

        return $next($request);
    }

}
