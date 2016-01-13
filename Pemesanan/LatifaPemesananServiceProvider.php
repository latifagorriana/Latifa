<?php

namespace Latifa\Pemesanan;

use Illuminate\Support\ServiceProvider;

class LatifaPemesananServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'LatifaPemesanan');
        require __DIR__.'/routes.php';
    }

    public function register()
    {
        
    }
}
