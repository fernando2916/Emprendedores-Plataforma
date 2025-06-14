<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::middleware('web')
        ->group(base_path('routes/web.php'));

        Route::middleware('web')
        ->prefix('auth')
        ->group(base_path('routes/auth.php'));

        Route::middleware(['web', 'auth'])
        ->prefix('admin')
        ->group(base_path('routes/admin.php'));
    }
}
