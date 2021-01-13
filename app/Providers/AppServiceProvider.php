<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function () {
            return auth()->user()->email == "admin@admin";
        });

        Blade::if('driver', function () {
            return strpos(auth()->user()->email, "@driver.");
        });

        Blade::if('cliente', function () {
            return (auth()->user()->email != "admin@admin") && (!strpos(auth()->user()->email, "@driver."));
        });
    }
}
