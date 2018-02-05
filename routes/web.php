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

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::get('/edit/{id}/{type}', 'UserController@edit')->name('edit');
Route::put('/update', 'UserController@update')->name('update');
Route::resource('/customer','CustomerController');

Route::group(['prefix'=> 'plane'], function(){
  Route::get('/test', function(){
    return view('test.testForm');
  });
  Route::post('/search', 'PlaneController@search');
  Route::post('/order', 'PlaneController@order');
  Route::post('/fixOrder', 'PlaneController@fixOrder');
});
