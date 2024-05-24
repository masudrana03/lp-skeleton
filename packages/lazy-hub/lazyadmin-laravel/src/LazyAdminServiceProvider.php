<?php


namespace LazyHub\LazyadminLaravel;

use Illuminate\Support\ServiceProvider;
use LazyHub\LazyadminLaravel\LazyAdmin;

class LazyAdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton("lazy-admin", function ($app){
            return new LazyAdmin();
        });
    }


    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        // dd('i lazy admin laravel is available');
    }
}
