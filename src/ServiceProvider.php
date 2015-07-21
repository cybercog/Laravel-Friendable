<?php

namespace DraperStudio\Friendable;

use Illuminate\Support\ServiceProvider as IlluminateProvider;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends IlluminateProvider
{
    public function boot()
    {
        $migrationFrom = __DIR__.'/../database/migrations/create_friendships_table.php';
        $migrationTo = database_path('/migrations/'.date('Y_m_d_His', time()).'_create_friendships_table.php');

        $this->publishes([$migrationFrom => $migrationTo], 'migrations');
    }

    public function register()
    {
        //
    }
}
