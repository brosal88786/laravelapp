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
    return view('welcome');
});
Route::get('hello','App\Http\Controllers\helloController@index');
Route::get('fruit','App\Http\Controllers\fruitController@index');
Route::get('/laravelapp/public/hellox','App\Http\Controllers\helloController@index2');
