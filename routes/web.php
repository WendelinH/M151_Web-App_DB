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

Route::get('/airports',[App\Http\Controllers\AirportsViewController::class, 'index'])->name('airports');
Route::get('/planes',[App\Http\Controllers\PlanesViewController::class, 'index'])->name('planes');
Route::get('/gates',[App\Http\Controllers\GatesViewController::class, 'index'])->name('gates');
Route::get('/flights',[App\Http\Controllers\FlightsViewController::class, 'index'])->name('flights');
