<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('/auth/login');
});
Route::get('/loginFailed', function () {
    return view('/auth/loginFailed');
});
Route::get('/register', function () {
    return view('/auth/register');
});
Route::get('/bookListing', function () {
    return view('bookListing');
});
Route::get('/landingPage', function () {
    return view('/customer/landingPage');
});

Route::post('/registerUser', 'App\Http\Controllers\UserController@registerUser');
Route::post('/validate', 'App\Http\Controllers\UserController@login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



