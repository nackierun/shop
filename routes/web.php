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





//*****Customers*****
Route::get('/customers','CustomersController@index')->name('home');
//category
Route::get('customers/categories','CustomersController@cat');
Route::get('customers/categories/show{id}','CustomersController@showcat');
Route::get('customers/showcat{id}','CustomersController@showcatproducts');
//product
Route::get('customers/products','CustomersController@products');
Route::get('customers/products/show{id}','CustomersController@show');


//Cart
Route::post('/AddToCart','CartController@AddToCart')->name('AddToCart');
Route::get('customers/cart','CartController@index')->name('cart');
Route::get('delete{id}','CartController@delete');
//Route::get('/cart/','CartController');
//Route::get('/cart/','CartController');

//checkout
Route::get('checkout/','CheckoutController@index')->name('checkout');
Route::post('confirm/','CheckoutController@confirm')->name('confirm');
Route::get('/checkout{id}','CustomersController@checkout');
//end Customers





//*****Administrator*****
//Route::group(['prefix' => 'admin'], function () {
  //  Voyager::routes();
//     });
Route::get('/admin','AdminController@index');
//category
Route::get('admin/categories','CategoriesController@index');
Route::get('admin/categories/create', 'CategoriesController@create');
Route::post('admin/categories/create','CategoriesController@store');
Route::get('admin/categories/edit{id}','CategoriesController@edit');
Route::post('admin/categories/edit{id}', 'CategoriesController@update');
Route::get('admin/categories/show{id}','CategoriesController@show');
Route::get('admin/categories/delete{id}','CategoriesController@destroy');
//product
Route::get('admin/products','ProductsController@index');
Route::get('admin/products/create','ProductsController@create');
Route::post('admin/products/create','ProductsController@store');
Route::get('admin/products/show{id}','ProductsController@show');
Route::get('admin/products/edit{id}','ProductsController@edit');
Route::post('admin/products/edit{id}','ProductsController@update');
Route::get('admin/products/delete{id}','ProductsController@destroy');
//End Admin

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
