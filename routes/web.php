<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{user}/profile', 'ProfilesController@index')->name('profile.show');
Route::get('/{user}/profile/edit', 'ProfilesController@edit')->name('profile.edit')->middleware('auth');
Route::patch('/{user}/profile/edit', 'ProfilesController@update')->name('profile.update')->middleware('auth');
