<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('example1', 'ExamplesController@example1');
Route::get('example1/getdata', 'ExamplesController@example1Data');

Route::get('/example2', 'ExamplesController@example2');