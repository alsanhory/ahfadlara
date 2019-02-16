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

/* Public Pages */
Route::get('/','TestingController@index');
Route::get('about','TestingController@about');
Route::get('services','TestingController@services');
Route::get('contacts','TestingController@contacts');

