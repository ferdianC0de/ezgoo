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

  Route::group(['prefix' => 'user'], function(){
    Route::get('', 'AdminController@user');
    Route::delete('destroy/{id}', 'UserController@destroy');
  });
  Route::group(['prefix' => 'resource'], function(){
    Route::get('user', 'AdminController@userData');
  });
});
