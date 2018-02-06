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

Route::group(["prefix" => 'admin'], function(){
	Route::resource('index','AdminController');
	Route::get('data_pemesan','AdminController@data_pemesan');
	Route::get('kereta','AdminController@kereta_api');
	Route::get('pesawat','AdminController@pesawat');
	Route::post('/create','AdminController@create');
});

Route::group(['prefix'=> 'frontend'], function(){
	Route::get('/home', 'AdminController@index');
});
