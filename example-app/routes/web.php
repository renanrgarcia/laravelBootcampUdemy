<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CalculateCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

// class User {
//   public $name;
//   public $email;

//   public function __construct($name, $email) {
//     $this->name = $name;
//     $this->email = $email;
//   }
// }


Route::get('/profile', function () {
//   $user = new User('John Doe', 'j@j.com');
//   return view('profile', compact('user'))->with('status', 'success')->with('code', 200);
  return view('profile');
});

// Route::view('/dashboard', 'dashboard');

Route::view('/dashboard', 'dashboard');