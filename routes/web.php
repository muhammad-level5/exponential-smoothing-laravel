<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index')->name('home');
Route::resource('data', 'DataController');
Route::get('/forecasting', 'ForecastingController@index')->name('forecast');
Route::post('/result', 'ForecastingController@result')->name('result');