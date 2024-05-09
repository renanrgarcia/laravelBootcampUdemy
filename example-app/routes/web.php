<?php

use App\Http\Middleware\CalculateCode;
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
    return view('welcome');
})->middleware('cal');

// Route::get('/', function (){
//     return view('welcome');
// })->name('home');

// Route::get('/company-contact', function () {
//     return 'contact';
// })->name('contact');

// Route::get('/profile', function () {
//     return 'profile';
// })->name('profile');