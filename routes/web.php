<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','ProductsController@trendinghome');

Route::get('/products/details/{id}', 'ProductsController@show');

Route::get('/shop', 'ProductsController@index');

Route::get('/create', 'ProductsController@create');

Route::post('/', 'ProductsController@store');

Route::get('/cart','CartsController@cartdata');

Route::get('/searched', 'HomeController@show');

Route::get('/category/search/{id}', 'CategoriesController@list');

Route::get('/myproduct/{id}', 'ProductsController@myproducts'); 

Route::get('/myproducts/{id}/edit','ProductsController@edit');

Route::put('/myproducts/{id}','ProductsController@update');

Route::get('/myproducts/delete/{id}','ProductsController@destroy');


Route::get('/checkout', 'CustomersController@index');

Route::post('/checkout/payment','CustomersController@store');


/*Cpanel*/

Route::get('/cpanel', function(){
         return view('Control Panel.Control-panel');
});

Route::get('/cpanel/customers', 'CustomersController@cpanel_index');

Route::get('/cpanel/products', 'ProductsController@cpanel_display');

Route::get('/cpanel/products/add', 'ProductsController@cpanel_create');

Route::post('/cpanel/products/add', 'ProductsController@cpanel_store');

Route::get('/cpanel/products/{id}/edit', 'ProductsController@cpanel_edit');

Route::put('/cpanel/products/{id}', 'ProductsController@cpanel_update');

Route::get('/cpanel/products/delete/{id}', 'ProductsController@destroy');


Route::get('/cpanel/categories', 'CategoriesController@index');
Route::get('/cpanel/categories/add', 'CategoriesController@create');
Route::post('/cpanel/categories/add', 'CategoriesController@store');
Route::get('/cpanel/categories/{id}/edit', 'CategoriesController@edit');
Route::put('/cpanel/categories/{id}', 'CategoriesController@update');
Route::get('/cpanel/categories/delete/{id}', 'CategoriesController@destroy');


Route::get('/cpanel/users', 'UsersController@index');
Route::get('/cpanel/users/add', 'UsersController@create');
Route::post('/cpanel/users/add', 'UsersController@store');
Route::get('/cpanel/users/{id}/edit', 'UsersController@edit');
Route::put('/cpanel/users/{id}', 'UsersController@update');
Route::get('/cpanel/users/delete/{id}', 'UsersController@destroy');

















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');












// Routes for ajax request
Route::post('/addtocarturl','CartsController@adddata');
Route::post('/addtocarturl','CartsController@adddata');
Route::post('/deletefromcarturl','CartsController@deletedata');
Route::post('/updatecarturl','CartsController@updatedata');
//Route for ajax request end
Route::get('/checkoutpaypal','CheckOutController@paypalpayment');