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
Route::get('/','parseController@parseJson');

Route::get('/saved_courses', ['as' => 'saved', 'uses' => 'parseController@index']);

Route::get('/save/{name?}/{course?}/{id?}', ['as' => 'save_index', 'uses' => 'parseController@save']);
