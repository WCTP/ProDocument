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

// home route
Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create');

/* auth routes */
Route::get('/logout', 'HomeController@logout');
Auth::routes();

/* document_general routes */
Route::get('/document_general/index', 'DocumentGeneralController@index');
Route::get('/document_general/create', 'DocumentGeneralController@create');
Route::get('/document_general/{document_general}', 'DocumentGeneralController@show');
Route::post('/document_general', 'DocumentGeneralController@store');
