<?php

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
})->name('welcome');


Route::get('/register', 'App\Http\Controllers\RegisterController@showRegistrationForm')->name('register');
Route::get('/login', 'App\Http\Controllers\RegisterController@showLoginForm')->name('login');
Route::get('/delete', 'App\Http\Controllers\RegisterController@showDelete')->name('delete');
Route::get('/update', 'App\Http\Controllers\RegisterController@showUpdate')->name('update');

Route::post('/login', 'App\Http\Controllers\RegisterController@login');
Route::post('/register', 'App\Http\Controllers\RegisterController@register');
Route::delete('/delete', 'App\Http\Controllers\RegisterController@destroy');
Route::put('/update', 'App\Http\Controllers\RegisterController@update');