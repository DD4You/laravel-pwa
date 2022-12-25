<?php

namespace DD4You\Pwa;

use Illuminate\Support\ServiceProvider;
use DD4You\Pwa\commands\PublishPWA;

class PWAServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishPWA::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
