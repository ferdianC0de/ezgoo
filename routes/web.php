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

Route::group(["prefix" => "test"], function(){
  Route::get('form', function(){
    return view('test.testForm');
  });
  Route::get('test', 'BookingController@test');
  Route::post('search', 'BookingController@search');
  Route::post('order', 'BookingController@order');
  Route::post('fixOrder', 'BookingController@fixOrder');
});

Route::group(['prefix'=> 'frontend'], function(){
  Route::get('/', function () {
      return view('frontend.home');
  });
  Route::get('/book', function () {
      return view('frontend.booking');
  });
  Route::get('/pesawat', function () {
      return view('frontend.pesawat');
  });
  Route::get('/tiketkereta', function () {
      return view('frontend.tiketkereta');
  });
  Route::get('/tiketpesawat', function () {
      return view('frontend.tiketpesawat');
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
  Route::get('/kround', function () {
    return view('frontend.kround');
  });
  Route::get('/ksingle', function () {
    return view('frontend.ksingle');
  });
  Route::get('/history', function () {
    return view('frontend.history');
  });
});

Route::group(["prefix" => 'admin'], function(){
  Route::get('home', 'AdminController@index');
  Route::resource('index','AdminController');
  Route::get('data_pemesan','AdminController@data_pemesan');
  Route::get('kereta','AdminController@kereta_api');
  Route::get('pesawat','AdminController@pesawat');
  Route::post('create','AdminController@create');

  /*Edit*/
  Route::get('edit/data_pemesan/{id}', 'AdminController@edit_data_pemesan');
  Route::post('edit/data_pemesan/{id}', 'AdminController@update_data_pemesan') ;
  Route::get('edit/{id}','AdminController@edit_data_pemesan');
  Route::put('update/{id}','AdminController@update_data_pemesan');
  Route::delete('delete/data_pemesan/{id}','AdminController@destroy_data_pemesan');
});

Route::resource('/airport', 'AirportController');
