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

Route::get('/', function () {
    return view('index');
});


Route::get('/map', function () {
    return view('map');
});


Route::post('/getOnChange','ApiController@getData');
Route::get('/test','ApiController@test');

Route::post('/userData','ApiController@userData');

Route::get('/UserfetchData','ApiController@UserfetchData');

