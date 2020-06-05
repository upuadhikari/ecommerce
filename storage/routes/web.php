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

//To show all routes
// Route::get('show-routes', function () {
//     \Artison::call;
// });



// Grouping different routes with prefix

// Route::group(['Prefix'=>'blug'], function () {
//     //different types of routes here
// });




//To call controller
Route::get('first-routes','FirstController@myFunction');
Route::get('/customer/{id?}','FirstController@Customers');
Route::get('students','StudentController@myFunction');
Route::get('students/detail','StudentController@studentFunction');
Route::get('students/Post','PostController@studentPostFunction');



//For to do applicaton
Route::get('/todos','TodosController@index');
Route::get('/edit_todo/{id}','TodosController@edit');
Route::get('delete_todo/{id}','TodosController@delete');
Route::get('/add_todo','TodosController@add');
Route::get('/update/{id}','TodosController@update');
Route::get('/save_new_todo','TodosController@save_new_todo');







