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

/*
  |--------------------------------------------------------------------------
  | Eloquent
  |--------------------------------------------------------------------------
 */

Route::get('example1', 'EloquentController@getExample1');
Route::get('example1/getdata', 'EloquentController@getDataExample1');

Route::get('example2', 'EloquentController@getExample2');
Route::get('example2/getdata', 'EloquentController@getDataExample2');

Route::get('example3', 'EloquentController@getExample3');
Route::get('example3/getdata', 'EloquentController@getDataExample3');

Route::get('example4', 'EloquentController@getExample4');
Route::get('example4/getdata', 'EloquentController@getDataExample4');