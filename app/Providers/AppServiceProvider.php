<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        //check that app is local
        // if ($this->app->isLocal()) {
        // $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        // } else {
        //     $this->app['request']->server->set('HTTPS', true);
        // }
        
        if (env('APP_ENV') === 'local') {
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        } else {
            // URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS', true);
        }

        // URL::forceScheme('`http`');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // if($this->app->environment('local')) {
        //     \URL::forceScheme('http');
        // }


    }
}