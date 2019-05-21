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
Route::get('/products','ProductsController@index');
Route::get('categories/create', 'ProductsController@create');
Route::post('categories/create','ProductsController@store');
Route::get('categories/edit{id}','ProductsController@edit');
Route::post('categories/edit{id}', 'ProductsController@update');
Route::get('categories/show{id}','ProductsController@show');
Route::get('categories/delete{id}','ProductsController@destroy');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('test', function() {
    return 'test';
});
