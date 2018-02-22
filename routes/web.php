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
Route::get('/', 'HomeController@index');
Route::get('/tampilanajaib', function()
{
  return view('booking.tiket');
});

Route::group(['prefix' => 'booking'], function(){
  Route::post('search', 'BookingController@search')->name('search');
  Route::post('order', 'BookingController@order')->name('order');
  Route::post('fixOrder', 'BookingController@fixOrder')->name('fixOrder');
});

Route::group(['prefix'=>'admin','middleware'=> 'checkRole'], function(){
  Route::resource('/','AdminController');
  Route::get('bookingdata','AdminController@bookingdata');

  // plane
  Route::group(['prefix'=>'plane','middleware'=> 'checkRole'],function(){
    Route::get('airport ','AdminController@airport');
    Route::get('listPlane','AdminController@listPlane');
    Route::get('planeSchedule','AdminController@planeSchedule');
    Route::get('createAirport', function(){ return view('admin.plane.cAirport');});
    Route::get('createPlane',   function(){ return view('admin..plane.cPlane');});
    Route::get('cplaneSchedule',function(){ return view('admin.plane.cplaneSchedule');});
    Route::post('pcreateAirport','AdminController@pcreateAirport');
    Route::post('pcreatePlane','AdminController@pcreatePlane');
    Route::get('editAirport/{id}','AdminController@editAirport');
    Route::get('editlistPlane/{id}','AdminController@editlistPlane');
    Route::put('updateAirport/{id}','AdminController@updateAirport');
    Route::put('updatelistPlane/{id}','AdminController@updatelistPlane');
    Route::put('updateTrain/{id}','AdminController@updateTrain');
    Route::delete('destroyAP/{id}','AdminController@destroyAP');
    Route::delete('destroyPS/{id}','AdminController@destroyPS');
    Route::delete('destroyPlane/{id}','AdminController@destroyPlane');
  });
  Route::group(['prefix'=>'train','middleware'=>'checkRole'],function(){
    Route::get('station','AdminController@station');
    Route::get('listTrain','AdminController@listTrain');
    Route::get('trainSchedule','AdminController@trainSchedule');
    Route::get('createStation', function(){ return view('admin.train.cStation');});
    Route::get('createTrain',   function(){ return view('admin.train.cTrain');});
    Route::get('ctrainSchedule',function(){ return view('admin.train.ctrainSchedule');});
    Route::post('pcreateStation','AdminController@pcreateStation');
    Route::post('pcreateTrain','AdminController@pcreateTrain');
    Route::get('editStation/{id}','AdminController@editStation');
    Route::get('editTrain/{id}','AdminController@editTrain');
    Route::put('updateStation/{id}','AdminController@updateStation');
    Route::put('updateTrain/{id}','AdminController@updateTrain');
    Route::delete('destroyStation/{id}','AdminController@destroyStation');
    Route::delete('destroyTrain/{id}','AdminController@destroyTrain');

  });
  //train
  Route::get('tprice','AdminController@tprice');
  Route::post('create','AdminController@create');
  Route::post('pcreate','AdminController@pcreate');

  /*Edit*/
  Route::get('edit/bookingdata/{id}', 'AdminController@ebookingData');
  Route::post('edit/bookingdata/{id}', 'AdminController@ubookingData') ;
  Route::get('edit/{id}','AdminController@ebookingData');
  Route::put('update/{id}','AdminController@ubookingData');
  Route::delete('delete/bookingdata/{id}','AdminController@dbookingData');
  Route::get('booking/{id}/{order?}', 'UserController@showBooking');
});
  Route::group(['prefix' => 'user', 'middleware'=> ['checkRole', 'isVerified']], function(){
  // Route::get('admin', 'AdminController@index')->name('admin');
  Route::get('home', 'HomeController@index')->name('home');
  Route::get('edit/{id}/{type}', 'UserController@edit')->name('edit');
  Route::put('update', 'UserController@update')->name('update');
  Route::put('updatePass', 'UserController@updatePassword')->name('updatePass');
});
Route::group(['prefix' => 'test'], function(){
  Route::get('test', 'BookingController@test');
  Route::get('testData', 'BookingController@testData');
});
