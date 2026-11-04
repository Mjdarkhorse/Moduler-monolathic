<?php

namespace App\Modules\Categories\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CategoriesServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the service container.
     * Nothing to register yet.
     */
    public function register(): void
    {
        //
    }

    /**
     * Load this module's API routes.
     *
     * The "api" URL prefix and the "api" middleware group are applied
     * here, exactly once. The module's route file must not add "api" again.
     */
    public function boot(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__.'/../Routes/api.php');
            });
    }
}
