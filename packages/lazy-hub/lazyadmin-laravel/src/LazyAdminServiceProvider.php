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
        $this->app->singleton("lazy-admin", function ($app) {
            return new LazyAdmin();
        });
    }


    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        // dd('i lazy admin laravel is available');

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Console\InstallCommand::class];
    }
}
