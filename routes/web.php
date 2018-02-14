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
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'booking'], function(){
  Route::post('search', 'BookingController@search')->name('search');
  Route::post('order', 'BookingController@order')->name('order');
  Route::post('fixOrder', 'BookingController@fixOrder')->name('fixOrder');
});

Route::group(['prefix'=>'admin','middleware'=> 'checkRole'], function(){
  Route::get('pesawat', 'AdminController@pesawat');
  Route::get('kereta', 'AdminController@kereta_api');
  Route::get('users', 'AdminController@showUsers');
  Route::resource('', 'AdminController');
  Route::resource('airport', 'AirportController');
});
  Route::group(['prefix' => 'user', 'middleware'=> ['checkRole', 'isVerified']], function(){
  // Route::get('admin', 'AdminController@index')->name('admin');

  Route::get('home', 'HomeController@index')->name('home');
  Route::get('edit/{id}/{type}', 'UserController@edit')->name('edit');
  Route::put('update', 'UserController@update')->name('update');
  Route::put('updatePass', 'UserController@updatePassword')->name('updatePass');
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
