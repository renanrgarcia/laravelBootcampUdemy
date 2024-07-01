<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CalculateCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
  // return view('welcome');

  // return response('Hello World', 200)
  //   ->header('Header 1', 'This is header 1')
  //   ->header('Header 2', 'This is header 2');

  // return response('Hello World', 200)->withHeaders([
  //   'Content-Type' => 'text/plain',
  //   'Header 1' => 'This is header 1',
  //   'Header 2' => 'This is header 2',
  // ]);

});

Route::middleware('cache.headers:private;no_cache')->group(function () {

  Route::get('/dashboard', function () {
    // return 'DASHBOARD';
    $user = 'Renan Garcia';
    $cookie = cookie('user', $user, 1);
    return response('User Data');
  });

  Route::get('/posts', function (Request $request) {
    $cookie = cookie('visit', 1, 30);
    return response('Posts')->cookie($cookie);
    // return 'Welcome to your post ' . $request->cookie('user');
  });

});