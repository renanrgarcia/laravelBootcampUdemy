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

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $user = new User('John Doe', 'j@j.com');

        // View::share(['user' => $user]);
    }
}
