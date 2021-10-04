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

Route::get('hello','HelloController@home');
Route::get('hello','HelloController@info');
Route::get('hello','HelloController@mypage');

Route::get('info', function () {
    return view('info');
  });
  Route::get('hello', function () {
    return view('home');
  });
  Route::get('mypage', function () {
    return view('mypage');
  });





