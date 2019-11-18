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




//  Route::resource('projects', 'PageController');

Route::get('/', 'PageController@index');
Route::get('/projects/{project}', 'PageController@show');
Route::get('/create', 'PageController@create');
Route::post('/', 'PageController@store');
Route::get('/projects/{project}/edit', 'PageController@edit');
Route::patch('/projects/{project}', 'PageController@update');
Route::delete('/create/{project}','PageController@destroy');

Route::post('/projects/{project}/notes', 'PageNotesController@store');



