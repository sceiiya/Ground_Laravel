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

