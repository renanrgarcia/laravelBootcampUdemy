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


// Route::get('/user/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{name}/{id}', function (string $name, int $id) {
//     return $name . ' ' . $id;
// })->where(['name' => '[A-Za-z]+', 'id' => '[0-9]+']);

Route::get('/user/{categories}', function ($categories) {
    return $categories;
})->whereIn('categories', ['a', 'b', 'c']);


// Route::view('/', 'welcome');

// // Route::get('/', function (Request $request) {
// //     return redirect('/profile');
// // });
// // equals to:
// Route::redirect('/', '/profile');

// Route::get('/user', 'CONTROLLER', 'METHOD');