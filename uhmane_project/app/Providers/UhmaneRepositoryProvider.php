<?php

namespace Uhmane\Providers;

use Illuminate\Support\ServiceProvider;

class UhmaneRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Uhmane\Repositories\ContatosRepository', 
            'Uhmane\Repositories\ContatosRepositoryEloquent'
        );
    }
}
