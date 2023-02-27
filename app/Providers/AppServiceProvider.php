<?php

namespace App\Providers;

use App\View\Components\landing\modal\modal;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;  

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        Paginator::useBootstrap(); 
        Blade::component('modal-footer', modal::class);
        
    }
    
}
