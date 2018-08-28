<?php

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
    return view('login');
});

Route::get('/signup', 'RegistrationController@create');

Route::post('/registerUser', 'RegistrationController@store');

Route::get('/dashboard', 'UserController@index')->name('dashboard');

Route::get('/home', 'UserController@index')->name('dashboard');

Route::get('/signin', 'SessionsController@create');

Route::post('/signin', 'SessionsController@store');

Route::get('/signout', 'SessionsController@destroy');
