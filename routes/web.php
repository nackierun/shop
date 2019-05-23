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

Route::get('/', 'CustomersController@index');
//Products
Route::get('/products','ProductsController@index');
Route::get('products/create','ProductsController@create');
Route::post('products/create','ProductsController@store');
Route::get('products/show{id}','ProductsController@show');
Route::get('products/edit{id}','ProductsController@edit');
Route::post('products/edit{id}','ProductsController@update');
Route::get('products/delete{id}','ProductsController@destroy');
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
//Customers
Route::get('/customers','CustomersController@index');

Route::get('customers/categories','CustomersController@cat');
Route::get('customers/categories/show{id}','CustomersController@showcat');

Route::get('customers/products','CustomersController@products');
Route::get('customers/products/show{id}','CustomersController@show');
//end Customers
//Administrator
Route::get('/admin','AdminController@index');

Route::get('admin/categories','CategoriesController@index');
Route::get('admin/categories/create', 'CategoriesController@create');
Route::post('admin/categories/create','CategoriesController@store');
Route::get('admin/categories/edit{id}','CategoriesController@edit');
Route::post('admin/categories/edit{id}', 'CategoriesController@update');
Route::get('admin/categories/show{id}','CategoriesController@show');
Route::get('admin/categories/delete{id}','CategoriesController@destroy');

Route::get('admin/products','ProductsController@index');
Route::get('admin/products/create','ProductsController@create');
Route::post('admin/products/create','ProductsController@store');
Route::get('admin/products/show{id}','ProductsController@show');
Route::get('admin/products/edit{id}','ProductsController@edit');
Route::post('admin/products/edit{id}','ProductsController@update');
Route::get('admin/products/delete{id}','ProductsController@destroy');
//End Admin
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('test', function() {
    return 'test';
});
