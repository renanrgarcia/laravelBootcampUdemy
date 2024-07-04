<?php

namespace App\Providers;

use App\View\Composers\UserViewComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        view()->composer(['profile', 'dashboard'], UserViewComposer::class);
        
        // view()->composer(['profile', 'dashboard'], function ($view) {
        //     $view->with('user', new User('Renan Garcia', 'r@r.com'));
        // });
    }
}
