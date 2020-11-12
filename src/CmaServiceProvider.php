<?php

namespace edgewizz\cma;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CmaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Cma\Controllers\CmaController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__ . '/components', 'cma');
        Blade::component('cma::cma.open', 'cma.open');
        Blade::component('cma::cma.index', 'cma.index');
        Blade::component('cma::cma.edit', 'cma.edit');
    }
}
