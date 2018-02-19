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
Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'booking'], function(){
  Route::post('search', 'BookingController@search')->name('search');
  Route::post('order', 'BookingController@order')->name('order');
  Route::post('fixOrder', 'BookingController@fixOrder')->name('fixOrder');
});

Route::group(['prefix'=>'admin','middleware'=> 'checkRole'], function(){
  Route::resource('/','AdminController');
  Route::get('bookingdata','AdminController@bookingdata');
  Route::get('train','AdminController@train');
  Route::get('tprice','AdminController@tprice');
  Route::get('plane','AdminController@plane');
  Route::get('pprice','AdminController@pprice');
  Route::post('create','AdminController@create');
  Route::post('pcreate','AdminController@pcreate');

  /*Edit*/
  Route::get('edit/bookingdata/{id}', 'AdminController@ebookingData');
  Route::post('edit/bookingdata/{id}', 'AdminController@ubookingData') ;
  Route::get('edit/{id}','AdminController@ebookingData');
  Route::put('update/{id}','AdminController@ubookingData');
  Route::delete('delete/bookingdata/{id}','AdminController@dbookingData');
});
  Route::group(['prefix' => 'user', 'middleware'=> ['checkRole', 'isVerified']], function(){
  // Route::get('admin', 'AdminController@index')->name('admin');
  Route::get('home', 'HomeController@index')->name('home');
  Route::get('edit/{id}/{type}', 'UserController@edit')->name('edit');
  Route::get('booking/{id}', 'UserController@showBooking');
  Route::put('update', 'UserController@update')->name('update');
  Route::put('updatePass', 'UserController@updatePassword')->name('updatePass');
});
Route::group(['prefix' => 'test'], function(){
  Route::get('form', function(){
    return view('test.testForm');
  });
  Route::get('test', 'BookingController@test');
  Route::get('testData', 'BookingController@testData');
});
