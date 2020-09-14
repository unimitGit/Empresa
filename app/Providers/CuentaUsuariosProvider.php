<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contador\CuentaUsuarios;


class CuentaUsuariosProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('contador', function(){
            return new CuentaUsuarios();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
