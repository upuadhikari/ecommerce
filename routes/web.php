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

Route::get('/checkout', function () {
    return view('check-out');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');











// Routes for ajax request
Route::post('/addtocarturl','CartsController@adddata');
Route::post('/addtocarturl','CartsController@adddata');
Route::post('/deletefromcarturl','CartsController@deletedata');
Route::post('/updatecarturl','CartsController@updatedata');
//Route for ajax request end