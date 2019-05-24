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
Route::get('/customers', 'CustomersController@index');
//category
<<<<<<< HEAD
Route::get('customers/categories', 'CustomersController@cat');
Route::get('customers/categories/show{id}', 'CustomersController@showcat');
Route::get('customers/showcat{id}', 'CustomersController@showcatproducts');
//product
Route::get('customers/products', 'CustomersController@products');
Route::get('customers/products/show{id}', 'CustomersController@show');
//checkout
Route::get('/checkout{id}', 'CheckoutController@index');
=======
Route::get('customers/categories','CustomersController@cat');
Route::get('customers/categories/show{id}','CustomersController@showcat');
//product
Route::get('customers/products','CustomersController@products');
Route::get('customers/products/show{id}','CustomersController@show');
>>>>>>> parent of 4ff9100... cart
//Cart
//Route::post('/Cart','CartController');
//Route::get('/cart','CartController');
//Route::get('/cart/','CartController');
//Route::get('/cart/','CartController');
//end Customers


//*****Administrator*****
Route::get('/admin', 'AdminController@index');
//category
Route::get('admin/categories', 'CategoriesController@index');
Route::get('admin/categories/create', 'CategoriesController@create');
Route::post('admin/categories/create', 'CategoriesController@store');
Route::get('admin/categories/edit{id}', 'CategoriesController@edit');
Route::post('admin/categories/edit{id}', 'CategoriesController@update');
Route::get('admin/categories/show{id}', 'CategoriesController@show');
Route::get('admin/categories/delete{id}', 'CategoriesController@destroy');
//product
Route::get('admin/products', 'ProductsController@index');
Route::get('admin/products/create', 'ProductsController@create');
Route::post('admin/products/create', 'ProductsController@store');
Route::get('admin/products/show{id}', 'ProductsController@show');
Route::get('admin/products/edit{id}', 'ProductsController@edit');
Route::post('admin/products/edit{id}', 'ProductsController@update');
Route::get('admin/products/delete{id}', 'ProductsController@destroy');
//End Admin
Route::get('/test', function () {
    return ('hello');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route for user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/member', 'MemberController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/admin', 'AdminController@index');
    });
});
