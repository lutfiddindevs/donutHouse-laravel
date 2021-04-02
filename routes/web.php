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

Route::get('/donuts', 'App\Http\Controllers\DonutController@index')->middleware('auth');
Route::get('/donuts/create', 'App\Http\Controllers\DonutController@create');
Route::post('/donuts', 'App\Http\Controllers\DonutController@store');
Route::get('/donuts/{id}', 'App\Http\Controllers\DonutController@show')->middleware('auth'); 
Route::delete('/donuts/{id}', 'App\Http\Controllers\DonutController@destroy')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class, 'index']);
