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

Route::group(['prefix'=> 'plane'], function(){
  Route::get('/test', function(){
    return view('test.plane.testForm');
  });
  Route::post('/search', 'PlaneController@search');
  Route::post('/order', 'PlaneController@order');
  Route::post('/fixOrder', 'PlaneController@fixOrder');
});
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
