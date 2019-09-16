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



Route::get('/users', 'UsersController@index');
Route::get('/api/users/list', 'UsersController@list');


Route::get('/', function () {
    return redirect('/users');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
