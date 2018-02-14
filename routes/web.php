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
Auth::routes();

Route::group(['prefix'=> 'frontend'], function(){
  Route::get('/', function () {
      return view('frontend.home');
  });
  Route::get('/book', function () {
      return view('frontend.booking');
  });
  Route::get('/userprofil', function () {
      return view('frontend.userprofil');
  });
  Route::get('/userpass', function () {
    return view('frontend.userpass');
  });
  Route::get('/pround', function () {
    return view('frontend.pround');
  });
  Route::get('/psingle', function () {
    return view('frontend.psingle');
  });
  Route::get('/history', function () {
    return view('frontend.history');
  });
});

Auth::routes();
Route::get('', 'HomeController@index');

Route::group(['prefix' => 'booking'], function(){
  Route::post('search', 'BookingController@search')->name('search');
  Route::post('order', 'BookingController@order')->name('order');
  Route::post('fixOrder', 'BookingController@fixOrder')->name('fixOrder');
});

Route::group(['prefix'=>'admin'], function(){
  Route::resource('airport', 'AirportController');
});
Route::group(['prefix' => 'user'], function(){
  Route::get('home', 'UserController@index')->name('home');
  Route::get('edit/{id}/{type}', 'UserController@edit')->name('edit');
  Route::put('update', 'UserController@update')->name('update');
});

Route::group(['prefix' => 'test'], function(){
  Route::get('form', function(){
    return view('test.testForm');
  });
  Route::get('test', 'BookingController@test');
  Route::get('testData', 'BookingController@testData');
  Route::post('search', 'BookingController@search');
  Route::post('order', 'BookingController@order');
  Route::post('fixOrder', 'BookingController@fixOrder');
});
