<?php

Auth::routes();
Route::get('', 'HomeController@index');
Route::group(['prefix' => 'user', 'middleware' => 'role:user'], function(){
  Route::get('', 'UserController@index');
});
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function(){
  Route::get('', 'AdminController@index');
});
