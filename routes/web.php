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

Route::get('/', 'MainController@index');
Route::get('create', 'MainController@create_page');
Route::post('category/save', 'MainController@save');
Route::get('category/edit_page/{id}', 'MainController@edit_page');
Route::post('category/edit', 'MainController@edit');
Route::get('category/del/{id}', 'MainController@del');


//book
Route::get('book', 'BookController@index');
Route::get('book/create', 'BookController@create_page');
Route::post('book/save', 'BookController@save');
Route::get('book/edit_page/{id}', 'BookController@edit_page');
Route::post('book/edit', 'BookController@edit');
Route::get('book/del/{id}', 'BookController@del');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
