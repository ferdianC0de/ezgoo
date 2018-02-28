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
});

// AJAX
Route::get('/plane/ajax/{id}','AdminController@planeAjax');
Route::get('/airport/ajax/{id}','AdminController@airportAjax');
Route::get('/train/ajax/{id}','AdminController@trainAjax');
Route::get('/station/ajax/{id}','AdminController@stationAjax');

Auth::routes();
Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'booking'], function(){
  Route::post('search', 'BookingController@search')->name('search');
  Route::post('order', 'BookingController@order')->name('order');
  Route::post('fixOrder', 'BookingController@fixOrder')->name('fixOrder');
  Route::put('payment/{id}', 'BookingController@payment')->name('payment');
});

Route::group(['prefix'=>'admin','middleware'=> 'checkRole'], function(){
  Route::resource('/','AdminController');
  Route::get('bookingdata','AdminController@bookingdata');
  Route::get('users','AdminController@showUsers');

  // plane
  Route::group(['prefix'=>'plane','middleware'=> 'checkRole'],function(){
    Route::get('airport ','AdminController@airport');
    Route::get('listPlane','AdminController@listPlane');
    Route::get('planeSchedule','AdminController@planeSchedule');
    Route::get('createAirport', function(){ return view('admin.plane.cAirport');});
    Route::get('createPlane',   function(){ return view('admin..plane.cPlane');});
    Route::get('detailPlaneschedule/{id}','AdminController@detailPlaneschedule');
    Route::get('cplaneSchedule','AdminController@cPlaneschedule');
    Route::post('pcreateAirport','AdminController@pcreateAirport');
    Route::post('pcreatePlane','AdminController@pcreatePlane');
    Route::post('pcreatePlaneschedule','AdminController@pcreatePlaneschedule');
    Route::get('editAirport/{id}','AdminController@editAirport');
    Route::get('editlistPlane/{id}','AdminController@editlistPlane');
    Route::get('editPlaneschedule/{id}','AdminController@editPlaneschedule');
    Route::put('updateAirport/{id}','AdminController@updateAirport');
    Route::put('updatelistPlane/{id}','AdminController@updatelistPlane');
    Route::put('updatePlaneschedule/{id}','AdminController@updatePlaneschedule');
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
    Route::get('cTrainschedule','AdminController@cTrainschedule');
    Route::get('detailTrainschedule/{id}','AdminController@detailTrainschedule');
    Route::post('pcreateStation','AdminController@pcreateStation');
    Route::post('pcreateTrain','AdminController@pcreateTrain');
    Route::post('pcreateTrainschedule','AdminController@pcreateTrainschedule');
    Route::get('editStation/{id}','AdminController@editStation');
    Route::get('editTrain/{id}','AdminController@editTrain');
    Route::get('editTrainschedule/{id}','AdminController@editTrainschedule');
    Route::put('updateStation/{id}','AdminController@updateStation');
    Route::put('updateTrain/{id}','AdminController@updateTrain');
    Route::delete('destroyStation/{id}','AdminController@destroyStation');
    Route::delete('destroyTrain/{id}','AdminController@destroyTrain');
    Route::delete('destroyTS/{id}','AdminController@destroyTS');

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
});
  Route::group(['prefix' => 'user', 'middleware'=> ['checkRole', 'isVerified']], function(){
  Route::get('edit/{id}/{type}', 'UserController@edit')->name('edit');
  Route::put('update', 'UserController@update')->name('update');
  Route::put('updatePass', 'UserController@updatePassword')->name('updatePass');

  Route::get('booking/{id}/{id_booking?}', 'UserController@showBooking');
  Route::get('ticket/{id}/{id_booking}', 'UserController@showTicket');
});
Route::group(['prefix' => 'test'], function(){
  Route::get('test', 'BookingController@test');
  Route::get('testData', 'BookingController@testData');
});
