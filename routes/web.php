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
//test routes

Route::get('/books', 'Crud\BookController@index');

Route::get('/add', 'Crud\BookController@create');

Route::post('/store', 'Crud\BookController@store');

Route::get('/show/book/{id}', 'Crud\BookController@show');

Route::get('/edit/book/{id}', 'Crud\BookController@edit');

Route::PATCH('/update/book{id}', 'Crud\BookController@update')->name('update');
