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
Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('','App\Http\Controllers\TopController@index');;
Route::get('hello','App\Http\Controllers\helloController@index')->middleware('auth');;
Route::get('fruit','App\Http\Controllers\fruitController@index')->middleware('auth');;
Route::get('giji','App\Http\Controllers\GijirokuController@index')->middleware('auth');;
Route::get('giji/add','App\Http\Controllers\GijirokuController@add')->middleware('auth');;
Route::post('giji/create','App\Http\Controllers\GijirokuController@create')->middleware('auth');;
