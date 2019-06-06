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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController')->except('index')->middleware('auth');

Route::get('state/{id}', function ($id) {
    return \App\City::whereStateId($id)->get();
});

Route::view('register', 'auth.register', [
    'states' => \App\State::get()
])->name('register');
