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

// Route::get('/', [PostsController::class, 'index']);

// Route::get('/', [UserController::class, 'show'])->middleware('auth');

// Route::get('/', function (Request $request) {
//   $data = $request->all();

//   return dd($data);
// });

// Route::get('/', function (Request $request) {
//   $data = $request->collect();

//   return $data->get('name');
// });

// Route::get('/', function (Request $request) {
//   $data = $request->input();

//   return $data;
// });

// Route::get('/', function (Request $request) {
//   return view('welcome');
// });

// Route::post('/colors', function (Request $request) {
//   return dd($request->input('colors.0'));
// });

// Route::get('/custom', function (Request $request) {
//   return dd($request->input('name'));
// });

Route::get('/', function () {
  return view('welcome');
});

Route::post('/date', function(Request $request) {
  // $obj = $request->date('appointment', 'Y-m-d', 'America/New_York');
  // $obj = $request->date('appointment');

  return $request->appointment;
});

Route::post('/custom', function(Request $request) {
  // $inputs = $request->only(['email', 'checkBox']);
  // $inputs = $request->except('email');

  // dd($inputs);
  
  // if ($request->has('email', 'checkBox')) {
  //   return 'Has email and checkBox';

  if ($request->hasAny('email', 'checkBox')) {
    return 'Has email or checkBox';
  }
});

Route::get('/data', function(Request $request) {
  // if ($request->hasAny('email', 'checkBox')) {
  //   return 'Has email or checkBox';
  // }

  // if ($request->missing('email')) {
  //   return 'Missing email';
  // }

  

});
