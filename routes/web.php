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



Route::get('/', 'App\Http\Controllers\ProductsController@index');

Route::get('/settings', 'App\Http\Controllers\SettingsController@index');
Route::get('/settings/create', 'App\Http\Controllers\SettingsController@create');
Route::post('/settings/create/save', 'App\Http\Controllers\SettingsController@store');
Route::post('/settings/save/{id}', 'App\Http\Controllers\SettingsController@update');


Route::get('/products/create', 'App\Http\Controllers\ProductsController@create');
Route::post('/products/create/save', 'App\Http\Controllers\ProductsController@store');
Route::get('/products/edit/{id}', 'App\Http\Controllers\ProductsController@edit');
Route::post('/products/edit/save/{id}', 'App\Http\Controllers\ProductsController@update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
