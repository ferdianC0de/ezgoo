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






Route::get('/edit/data_pemesan/{id}', 'AdminController@edit_data_pemesan');
Route::post('/edit/data_pemesan/{id}', 'AdminController@update_data_pemesan')	;
Route::delete('/delete/data_pemesan/{id}','AdminController@destroy_data_pemesan');
Route::get('admin/edit/{id}','AdminController@edit_data_pemesan');
Route::put('admin/update/{id}','AdminController@update_data_pemesan');

Route::get('/home', 'UserController@index')->name('home');
Route::get('/edit/{id}/{type}', 'UserController@edit')->name('edit');
Route::put('/update', 'UserController@update')->name('update');
Route::resource('/customer','CustomerController');

<<<<<<< HEAD
Route::group(["prefix" => 'admin'], function(){
	Route::resource('index','AdminController');
	Route::get('data_pemesan','AdminController@data_pemesan');
	Route::get('kereta','AdminController@kereta_api');
	Route::get('pesawat','AdminController@pesawat');
	Route::post('/create','AdminController@create');
});

Route::group(['prefix'=> 'frontend'], function(){
	Route::get('/home', 'AdminController@index');
=======
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
>>>>>>> 1a2fd44d9059cfc4c5c637bd99bcce93ddad6f0a
});
