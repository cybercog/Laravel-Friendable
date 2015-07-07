<?php

namespace DraperStudio\Friendable;

use Illuminate\Support\ServiceProvider;

/**
 * Class FriendableServiceProvider.
 */
class FriendableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
