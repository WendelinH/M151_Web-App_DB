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

Route::resource('/airports', App\Http\Controllers\AirportsViewController::class);
Route::resource('/planes', App\Http\Controllers\PlanesViewController::class);
Route::resource('/gates', App\Http\Controllers\GatesViewController::class);
Route::resource('/flights', App\Http\Controllers\FlightsViewController::class);

