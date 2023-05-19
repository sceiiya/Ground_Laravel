<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dash', 'App\Http\Controllers\ControllerFirst@dashboard');
Route::get('slug/{slug}', 'App\Http\Controllers\ControllerFirst@slug');
Route::get('sluggy/{slug}/{slugg}/{sluggg}/{slugggg}/{sluggggg}', 'App\Http\Controllers\ControllerFirst@sluggy');
Route::get('fistView', 'App\Http\Controllers\ControllerFirst@flopView');
Route::get('yieldView', 'App\Http\Controllers\ControllerFirst@flopYield');
Route::get('inyieldView', 'App\Http\Controllers\ControllerFirst@inYield');
Route::get('dashv', 'App\Http\Controllers\ControllerFirst@dashv');

Route::post('new-city', 'App\Http\Controllers\ControllerFirst@store');
Route::post('show-city', 'App\Http\Controllers\ControllerFirst@show');
Route::post('selectshow-city/{$slug}', 'App\Http\Controllers\ControllerFirst@showSelect');
Route::post('manipulate-city/{$slug}', 'App\Http\Controllers\ControllerFirst@update');
Route::post('destroy-city/{$slug}', 'App\Http\Controllers\ControllerFirst@destroy');