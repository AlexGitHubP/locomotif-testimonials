<?php

namespace Locomotif\Testimonials;

use Illuminate\Support\ServiceProvider;

class TestimonialsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Locomotif\Testimonials\Controller\TestimonialsController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations/');

        //$this->loadViewsFrom(__DIR__.'/views/', 'testimonials');
        $this->loadViewsFrom(resource_path('views/locomotif/testimonials'), 'testimonials');
        $this->publishes([
            __DIR__.'/views/' => resource_path('views/locomotif/testimonials'),
        ]);
    }
}
