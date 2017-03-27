<?php

namespace Allenjd3\Adminlte\src;

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
        $this->loadViewsFrom(__DIR__.'/src/views', 'jd3_lte');
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
