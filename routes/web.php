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


Route::group(["prefix" => 'admin'], function(){
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
  Route::post('/search', 'PlaneController@search');
  Route::post('/order', 'PlaneController@order');
  Route::post('/fixOrder', 'PlaneController@fixOrder');
  Route::post('/booking', 'BookingController@bookingPlane');
});

Route::group(['prefix'=>'admin','middleware'=> 'checkRole'], function(){
  Route::get('pesawat', 'AdminController@pesawat');
  Route::get('kereta', 'AdminController@kereta_api');
  Route::get('users', 'AdminController@showUsers');
  Route::resource('', 'AdminController');
  Route::resource('airport', 'AirportController');
});
Route::group(['prefix' => 'user', 'middleware'=> 'checkRole'], function(){
  // Route::get('admin', 'AdminController@index')->name('admin');

  Route::get('home', 'HomeController@index')->name('home');
  Route::get('edit/{id}/{type}', 'UserController@edit')->name('edit');
  Route::put('update', 'UserController@update')->name('update');
  Route::put('updatePass', 'UserController@updatePassword')->name('updatePass');
});
