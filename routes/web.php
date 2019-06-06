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


//*****Customers*****
Route::get('/test', 'CustomersController@test');
Route::get('/', 'CustomersController@index');
Route::get('/customers', 'CustomersController@index')->name('home');
//category
Route::get('customers/categories', 'CustomersController@cat');
Route::get('customers/categories/show{id}', 'CustomersController@showcat');
Route::get('customers/showcat{id}', 'CustomersController@showcatproducts');
//product
Route::get('customers/products', 'CustomersController@products');
Route::get('customers/products/show{id}', 'CustomersController@show');
//view order
Route::get('checkout/vieworder{id}', 'CustomersController@vieworder');

//Cart
Route::post('/AddToCart', 'CartController@AddToCart')->name('AddToCart');
Route::get('customers/cart', 'CartController@index')->name('cart');
Route::get('customers/cart/update-quantity/{id}/{quantity}', 'CartController@updatequantity');
Route::get('delete{id}', 'CartController@delete');

Route::resource('customer/order', 'OrderController');

//Route::get('/cart/','CartController');
//Route::get('/cart/','CartController');

//checkout
Route::get('checkout/', 'CheckoutController@index')->name('checkout');
Route::post('confirm/', 'CheckoutController@confirm')->name('confirm');
Route::get('/checkout{id}', 'CustomersController@checkout');
//end Customers


//*****Administrator*****
//Route::get('/admin', 'AdminController@index');
//category
Route::get('admin/categories', 'CategoriesController@index');
Route::get('admin/categories/create', 'CategoriesController@create');
Route::post('admin/categories/create', 'CategoriesController@store');
Route::get('admin/categories/edit/{id}', 'CategoriesController@edit');
Route::post('admin/categories/edit/{id}', 'CategoriesController@update');
Route::get('admin/categories/show/{id}', 'CategoriesController@show');
Route::get('admin/categories/delete/{id}', 'CategoriesController@destroy');
//product
Route::get('admin/products', 'ProductsController@index');
Route::get('admin/products/create', 'ProductsController@create');
Route::post('admin/products/create', 'ProductsController@store');
Route::get('admin/products/show/{id}', 'ProductsController@show');
Route::get('admin/products/edit/{id}', 'ProductsController@edit');
Route::post('admin/products/update/{id}', 'ProductsController@update');
Route::get('admin/products/delete/{id}', 'ProductsController@destroy');
//vieworder
Route::get('admin/vieworder', 'AdminController@vieworder');
Route::get('admin/orderdetail/{id}', 'AdminController@vieworderdetail');
//slideshow
Route::get('/admin/slideshow', 'AdminController@slideshow');
Route::post('/admin/slideshow', 'AdminController@addslide');
//End Admin

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
