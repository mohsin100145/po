<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard2', 'HomeController@dashboard2');
Route::get('/dashboard3', 'HomeController@dashboard3');

Route::get('/phone', 'PhoneController@index');
Route::get('/phone/create', 'PhoneController@create');
Route::post('/phone/store', 'PhoneController@store');
Route::get('/phone/{id}', 'PhoneController@show');
Route::get('/phone/edit1', 'PhoneController@edit1');
Route::get('phone/{id}/edit', 'PhoneController@edit');
Route::put('phone/{id}', 'PhoneController@update');

Route::get('/carrier', 'CarrierController@index');
Route::get('/carrier/create', 'CarrierController@create');
Route::post('/carrier/store', 'CarrierController@store');
Route::get('/carrier/{id}', 'CarrierController@show');
Route::get('/carrier/{id}/edit', 'CarrierController@edit');
Route::put('/carrier/{id}', 'CarrierController@update');

Route::get('/cdr', 'CdrController@index');
Route::get('/cdr-report-form', 'CdrController@reportForm');
Route::post('/cdr-report-show', 'CdrController@reportShow');

Route::get('/chart', 'ChartController@index');

Route::post('/thana-login', 'ThanaLoginController@index');

Route::get('division', 'DivisionController@index');
Route::get('division/create', 'DivisionController@create');
Route::post('division', 'DivisionController@store');
Route::get('division/{id}/edit', 'DivisionController@edit');
Route::put('division/{id}', 'DivisionController@update');

Route::get('district', 'DistrictController@index');
Route::get('district/create', 'DistrictController@create');
Route::post('district', 'DistrictController@store');
Route::get('district/{id}/edit', 'DistrictController@edit');
Route::put('district/{id}', 'DistrictController@update');