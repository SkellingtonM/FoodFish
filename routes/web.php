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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/profiles', Admin\ProfileController::class, ['as'=>'admin']);
Route::get('/admin/create', 'ProfileController@create');
Route::post('/profiles/create', 'ProfileController@store');
Route::resource('/admin/prices', Admin\PricesController::class, ['as'=>'admin']);
Route::get('/admin/create', 'PricesController@create');
Route::post('/prices/create', 'PricesController@store');
