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

Route::get('/', function () {
    return view('home');
});

Route::get('/book', function () {
    return view('booking');
});

Route::get('/pesawat', function () {
    return view('pesawat');
});

Route::get('/tiketkereta', function () {
    return view('tiketkereta');
});

Route::get('/tiketpesawat', function () {
    return view('tiketpesawat');
});

Route::get('/userprofil', function () {
    return view('userprofil');
});

Route::get('/userpass', function () {
  return view('userpass');
});

Route::get('/pround', function () {
  return view('pround');
});

Route::get('/psingle', function () {
  return view('psingle');
});

Route::get('/kround', function () {
  return view('kround');
});

Route::get('/ksingle', function () {
  return view('ksingle');
});

Route::get('/history', function () {
  return view('history');
});
