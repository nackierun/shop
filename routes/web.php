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
//Products
Route::get('/products','ProductsController@index');
Route::get('products/create','ProductsController@create');
Route::post('products/create','ProductsController@store');
//End Products
//Categories
Route::get('/categories','CategoriesController@index');
Route::get('categories/create', 'CategoriesController@create');
Route::post('categories/create','CategoriesController@store');
Route::get('categories/edit{id}','CategoriesController@edit');
Route::post('categories/edit{id}', 'CategoriesController@update');
Route::get('categories/show{id}','CategoriesController@show');
Route::get('categories/delete{id}','CategoriesController@destroy');
//End categories

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('test', function() {
    return 'test';
});
