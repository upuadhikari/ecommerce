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

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('check-out');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');











// Routes for ajax request
Route::post('/addtocarturl','CartController@adddata');
//Route for ajax request end
