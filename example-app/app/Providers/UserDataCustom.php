<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

// class User {
//     public $name;
//     public $email;

//     public function __construct($name, $email) {
//         $this->name = $name;
//         $this->email = $email;
//     }
// }

class UserDataCustom extends ServiceProvider
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
        // view()->composer(['profile', 'dashboard'], function ($view) {
        //     $view->with('user', new User('Renan Garcia', 'r@r.com'));
        // });

        // $user = new User('John Doe', 'j@j.com');

        // View::share(['user' => $user]);
    }
}
