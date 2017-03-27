<?php

namespace allenjd3\adminlte-laravel;

use Illuminate\Support\ServiceProvider;

class AdminlteComponentProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__."vendor/allenjd3/adminlte-laravel/views", 'jd3_lte');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
