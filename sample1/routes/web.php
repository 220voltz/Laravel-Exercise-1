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

Route::get('/','testController@actionIndex');
Route::get('/test','testController@myPage');

// passing value through url
Route::get('/testValue1/{ab}','testController@testValue');

// passing OPTIONAL value through url using '?'
Route::get('/testValue2/{ab?}','testController@testValue');

// passing OPTIONAL value with REGEX
// Route::get('/testValue2/{ab?}','testController@testValue')->where('name','[REGEX]')

// Using REST API
Route::get('/testAPI','apiController@fnOne')->name('get_testAPI');
// https://restcountries.eu/rest/v2/callingcode/63


Route::get('/multipleValues','testController@multipleValues');


//Redirect routes
Route::get('/redirectTest','testController@redirectTest');

Route::get('/testForm','testController@showTestForm')->name('showTestForm');
Route::post('/postForm','testController@postTestForm')->name('postTestForm');


Route::get('/testRequest/{id}','testController@testValue1');

Route::get('/jsonResponse','testController@jsonResponse');