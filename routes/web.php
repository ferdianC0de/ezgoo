<?php

Auth::routes();
Route::get('', 'HomeController@index');

Route::get('verify/{token}', 'HomeController@verify');
Route::group(['prefix' => 'user', 'middleware' => ['verified', 'role:user']], function(){
  Route::get('', 'UserController@index');
});
Route::group(['prefix' => 'administrator', 'middleware' => 'role:admin'], function(){
  Route::get('', 'AdminController@index');
  //Chart
  Route::get('chart/{month?}/{year?}', 'AdminController@chart');
});
