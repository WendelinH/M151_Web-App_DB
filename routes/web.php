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

Route::get('/airports',[App\Http\Controllers\AirportsViewController::class, 'index'])->name('airports.index');
Route::get('/airports/{id}/show',[App\Http\Controllers\AirportsViewController::class, 'show'])->name('airports.show');
Route::post('/airports',[App\Http\Controllers\AirportsViewController::class, 'create'])->name('airports.create');
Route::get('/airports/{id}/edit',[App\Http\Controllers\AirportsViewController::class, 'edit'])->name('airports.edit');
Route::put('/airports/{id}',[App\Http\Controllers\AirportsViewController::class, 'update'])->name('airports.update');
Route::delete('/airports/{id}',[App\Http\Controllers\AirportsViewController::class, 'destroy'])->name('airports.destroy');


Route::get('/planes',[App\Http\Controllers\PlanesViewController::class, 'index'])->name('planes.index');
Route::get('/planes/{id}/show',[App\Http\Controllers\AirportsViewController::class, 'show'])->name('planes.show');
Route::post('/planes',[App\Http\Controllers\AirportsViewController::class, 'create'])->name('planes.create');
Route::get('/planes/{id}/edit',[App\Http\Controllers\AirportsViewController::class, 'edit'])->name('planes.edit');
Route::put('/planes/{id}',[App\Http\Controllers\AirportsViewController::class, 'update'])->name('planes.update');
Route::delete('/planes/{id}',[App\Http\Controllers\AirportsViewController::class, 'destroy'])->name('planes.destroy');

Route::get('/gates',[App\Http\Controllers\GatesViewController::class, 'index'])->name('gates.index');
Route::get('/gates/{id}/show',[App\Http\Controllers\AirportsViewController::class, 'show'])->name('gates.show');
Route::post('/gates',[App\Http\Controllers\AirportsViewController::class, 'create'])->name('gates.create');
Route::get('/gates/{id}/edit',[App\Http\Controllers\AirportsViewController::class, 'edit'])->name('gates.edit');
Route::put('/gates/{id}',[App\Http\Controllers\AirportsViewController::class, 'update'])->name('gates.update');
Route::delete('/gates/{id}',[App\Http\Controllers\AirportsViewController::class, 'destroy'])->name('gates.destroy');

Route::get('/flights',[App\Http\Controllers\FlightsViewController::class, 'index'])->name('flights.index');
Route::get('/flights/{id}/show',[App\Http\Controllers\AirportsViewController::class, 'show'])->name('flights.show');
Route::post('/flights',[App\Http\Controllers\AirportsViewController::class, 'create'])->name('flights.create');
Route::get('/flights/{id}/edit',[App\Http\Controllers\AirportsViewController::class, 'edit'])->name('flights.edit');
Route::put('/flights/{id}',[App\Http\Controllers\AirportsViewController::class, 'update'])->name('flights.update');
Route::delete('/flights/{id}',[App\Http\Controllers\AirportsViewController::class, 'destroy'])->name('flights.destroy');
