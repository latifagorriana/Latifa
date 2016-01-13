<?php

namespace Latifa\User;

use Illuminate\Support\ServiceProvider;

class LatifaUserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'LatifaUser');
        require __DIR__.'/routes.php';
    }

    public function register()
    {
        
    }
}
