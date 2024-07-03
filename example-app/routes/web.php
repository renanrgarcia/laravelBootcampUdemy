<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CalculateCode;
use App\Models\User;
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

// Route::get('/', function () {
//   return view('welcome');
// })->name('home');

// Route::get('/login', function () {
//   return redirect()->route('home');
// });

// Route::get('/data', function (Request $request) {
//   return $request->query('id');
// })->name('data');

// Route::get('/dashboard', function (Request $request) {
//   return redirect()->route('data', ['id' => 5]);
// });

// Route::get('/', function () {
//   return redirect()->action([DashboardController::class, 'index'], ['id' => 5]);
// });

Route::get('/', function () {
  return view('welcome');
});

// Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/json', function () {
  return response()->json([
    'name' => 'Renan Garcia',
    'role' => 'admin'
  ]);
});