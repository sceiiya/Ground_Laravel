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
Route::get('api/documentation', ['middleware' => 'cors' , 'uses'=> 'App\Http\Controllers\ControllerFirst@docu']);


// Route::get('/new-city', 'App\Http\Controllers\ControllerFirst@store');
Route::post('/api/new-city', ['middleware' => 'cors' , 'uses'=> 'App\Http\Controllers\ControllerFirst@store']);
Route::get('/api/show-city', ['middleware' => 'cors' , 'uses'=> 'App\Http\Controllers\ControllerFirst@show']);
Route::get('/api/show-city/{UID}', ['middleware' => 'cors' , 'uses'=> 'App\Http\Controllers\ControllerFirst@readSel']);
Route::post('/api/show-city', ['middleware' => 'cors' , 'uses'=> 'App\Http\Controllers\ControllerFirst@read']);
Route::post('/api/manipulate-city', ['middleware' => 'cors' , 'uses'=> 'App\Http\Controllers\ControllerFirst@manipulate'])->name('api/manipulate-city');
Route::get('/api/destroy-city/{UID}', ['middleware' => 'cors' , 'uses'=> 'App\Http\Controllers\ControllerFirst@destroy'])->name('api/destroy-city');
