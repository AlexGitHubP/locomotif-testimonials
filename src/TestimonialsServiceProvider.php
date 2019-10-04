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
        $this->loadViewsFrom(__DIR__.'/views/', 'testimonials');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations/');
    }
}
