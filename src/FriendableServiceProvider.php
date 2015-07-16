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
        $migrationFrom = __DIR__.'/../database/migrations/create_friendships_table.php';
        $migrationTo = database_path('/migrations/'.date('Y_m_d_His', time()).'_create_friendships_table.php');

        $this->publishes([$migrationFrom => $migrationTo], 'migrations');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
