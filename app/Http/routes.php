<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('frontend.frontend');
// });
Route::get('/','FrontEndController@index');
 Route::auth();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@index');
//Route::get('category', 'CategoryController@index');
//Route::get('category/create', 'CategoryController@create');
//Route::get('category/{id}/edit', 'CategoryController@edit');
//Route::POST('category', 'CategoryController@store');
//Route::patch('category/{id}', 'CategoryController@update');
 //Route::delete('category/{id}', 'CategoryController@destroy');
Route::resource('category','CategoryController');
Route::get('/gallery', 'GalleryController@index');
Route::get('/contactus', 'ContactusController@index');

});


