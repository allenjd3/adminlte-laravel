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
        	__DIR__.'/views/layouts' => resource_path('/views/vendor/jd3_lte/layouts'),
    	], 'layouts');
    	$this->publishes([
        	__DIR__.'/views/slots' => resource_path('/views/vendor/jd3_lte/slots'),
    	], 'slots');
    	$this->publishes([
        	__DIR__.'/views/partials' => resource_path('/views/vendor/jd3_lte/partials'),
    	], 'partials');
    	$this->publishes([
        	__DIR__.'/views/partials/backend_left_sidebar.blade.php' => resource_path('/views/vendor/jd3_lte/partials/backend_left_sidebar.blade.php'),
    	], 'left-sidebar');
        $this->publishes([
            __DIR__.'/views/partials/backend_content.blade.php' => resource_path('/views/vendor/jd3_lte/partials/backend_content.blade.php'),
        ], 'content');   
        $this->publishes([
            __DIR__.'/views/partials/backend_footer.blade.php' => resource_path('/views/vendor/jd3_lte/partials/backend_footer.php'),
        ], 'footer');
        $this->publishes([
            __DIR__.'/views/partials/backend_main_nav.blade.php' => resource_path('/views/vendor/jd3_lte/partials/backend_main_nav.blade.php'),
        ], 'main-nav');   
        $this->publishes([
            __DIR__.'/views/partials/backend_scripts.blade.php' => resource_path('/views/vendor/jd3_lte/partials/backend_scripts.php'),
        ], 'scripts');  
        $this->publishes([
            __DIR__.'/views/partials/backend_sidebar_left_searchform.blade.php' => resource_path('/views/vendor/jd3_lte/partials/backend_left_searchform.blade.php'),
        ], 'searchform'); 
        $this->publishes([
            __DIR__.'/views/partials/backend_sidebar_right.blade.php' => resource_path('/views/vendor/jd3_lte/partials/backend_sidebar_right.php'),
        ], 'right-sidebar');  
        $this->publishes([
            __DIR__.'/views/slots/button.blade.php' => resource_path('/views/vendor/jd3_lte/slots/button.blade.php'),
        ], 'button');  
        $this->publishes([
            __DIR__.'/views/slots/callout.blade.php' => resource_path('/views/vendor/jd3_lte/slots/callout.blade.php'),
        ], 'callout');   
        $this->publishes([
            __DIR__.'/views/slots/checkbox.blade.php' => resource_path('/views/vendor/jd3_lte/slots/checkbox.blade.php'),
        ], 'checkbox');    
        $this->publishes([
            __DIR__.'/views/slots/ck_edit.blade.php' => resource_path('/views/vendor/jd3_lte/slots/ck_edit.blade.php'),
        ], 'ck-edit');  
        $this->publishes([
            __DIR__.'/views/slots/content_box.blade.php' => resource_path('/views/vendor/jd3_lte/slots/content_box.blade.php'),
        ], 'content-box');   
        $this->publishes([
            __DIR__.'/views/slots/form_component.blade.php' => resource_path('/views/vendor/jd3_lte/slots/form_component.blade.php'),
        ], 'form-component'); 
        $this->publishes([
            __DIR__.'/views/slots/left_sidebar_basic_link.blade.php' => resource_path('/views/vendor/jd3_lte/slots/left_sidebar_basic_link.blade.php'),
        ], 'link');
        $this->publishes([
            __DIR__.'/views/slots/left_sidebar_treeview_link.blade.php' => resource_path('/views/vendor/jd3_lte/slots/left_sidebar_treeview_link.blade.php'),
        ], 'treeview');   
        $this->publishes([
            __DIR__.'/views/slots/left_sidebar_header.blade.php' => resource_path('/views/vendor/jd3_lte/slots/left_sidebar_header.blade.php'),
        ], 'header-left');    	
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
