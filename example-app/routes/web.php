<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SessionsController;
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

Route::get('/', function (Request $request) {
  // $request->session(['secret' => 'test']);

  session(['secret' => 'test']);

  return view('welcome');
});

Route::prefix('sessions')
  ->controller(SessionsController::class)
  ->group(function () {
    Route::get('/', 'index');
    Route::get('/set', 'set');
    Route::get('/delete', 'delete');
  });