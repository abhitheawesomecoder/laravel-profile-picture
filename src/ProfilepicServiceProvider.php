<?php

namespace Abhitheawesomecoder\Profilepic;

use Illuminate\Support\ServiceProvider;

class ProfilepicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {    
         $this->loadViewsFrom(__DIR__.'/views', 'profilepic');

         $this->publishes([
         __DIR__.'/migrations' =>  database_path('/migrations')
        ], 'migrations');
		$this->publishes([
        __DIR__.'/Assets' => public_path('vendor/abhitheawesomecoder/profilepic'),
        ], 'public');
         $this->publishes([
         __DIR__.'/views' =>  base_path('resources/views/vendor/abhitheawesomecoder/profilepic')
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Abhitheawesomecoder\Profilepic\Controller\ProfilepicController');
    }
}
