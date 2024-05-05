<?php

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


Route::get('/{id}/{status}', function ($id, $status) {
    return $id . "!" . $status;
});

// Route::view('/', 'welcome');

// // Route::get('/', function (Request $request) {
// //     return redirect('/profile');
// // });
// // equals to:
// Route::redirect('/', '/profile');

// Route::get('/user', 'CONTROLLER', 'METHOD');