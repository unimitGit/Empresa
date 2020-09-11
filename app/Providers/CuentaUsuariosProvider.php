<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contador\CuentaUsuarios;
use Illuminate\Foundation\AliasLoader;

class CuentaUsuariosProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('contador', function($app){
            $loader = AliasLoader::getInstance();
            $loader->alias('TestContador', App\Facades\CuentaUsuarios::class);
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
