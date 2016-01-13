<?php

namespace Latifa\Template;

use Illuminate\Support\ServiceProvider;

class LatifaTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'LatifaTemplate');
        $this->publishes([__DIR__.'/public'=>public_path("latifa-template")], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
