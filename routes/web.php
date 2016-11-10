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

Route::get('example5', 'EloquentController@getExample5');
Route::get('example5/getdata', 'EloquentController@getDataExample5');

/*
  |--------------------------------------------------------------------------
  | Query Builder
  |--------------------------------------------------------------------------
 */

Route::get('example6', 'QueryBuilderController@getExample6');
Route::get('example6/getdata', 'QueryBuilderController@getDataExample6');

Route::get('example7', 'QueryBuilderController@getExample7');
Route::get('example7/getdata', 'QueryBuilderController@getDataExample7');

/*
  |--------------------------------------------------------------------------
  | Collection
  |--------------------------------------------------------------------------
 */
Route::get('example8', 'CollectionController@getExample8');
Route::get('example8/getdata', 'CollectionController@getDataExample8');

/*
  |--------------------------------------------------------------------------
  | HTML Builder
  |--------------------------------------------------------------------------
 */
Route::get('example9', 'HtmlBuilderController@getExample9');
Route::get('example9/getdata', 'HtmlBuilderController@getDataExample9');

