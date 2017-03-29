<?php

namespace Allenjd3\Adminlte;

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
        $this->loadViewsFrom(__DIR__.'/views', 'jd3_lte');
        $this->publishes([
        	__DIR__.'/dist' => public_path('/dist'),
    	], 'public');
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
