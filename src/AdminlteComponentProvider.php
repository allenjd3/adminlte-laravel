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
    	$this->publishes([
        	__DIR__.'/views/layouts' => resource_path('/views/vendor/allenjd3/layouts'),
    	], 'layouts');
    	$this->publishes([
        	__DIR__.'/views/slots' => resource_path('/views/vendor/allenjd3/slots'),
    	], 'slots');
    	$this->publishes([
        	__DIR__.'/views/partials' => resource_path('/views/vendor/allenjd3/partials'),
    	], 'partials');
    	
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
