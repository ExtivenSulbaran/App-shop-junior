<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//debes tambien llamar su direccion mediante use OJO!!!
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //este comando nos ayudara si nuestra version de PHPMYADMIN ES VIEJA
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
