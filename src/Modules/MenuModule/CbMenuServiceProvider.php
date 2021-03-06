<?php

namespace crocodicstudio\crudbooster\Modules\MenuModule;

use Illuminate\Support\ServiceProvider;

class CbMenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->addNamespace('CbMenu', __DIR__.'/views');
        $this->loadRoutesFrom( __DIR__.'/menus_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('CbDynamicMenus', DynamicMenus::class);
    }
}
