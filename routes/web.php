<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ShowCarController;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\get;

Route::get('/', function () {
    $aboutPageUrl = route('about');

    return view('welcome');
})->name('home');

/*
Named View Routes
*/
Route::view('/about-us', 'about') -> name('about');

/**
 * Single Action Contollers
 */
//Route::controller(CarController::class)->group(function () {
//    Route::get('/cars', 'index') -> name('cars.index');
//    Route::get('/cars/create', 'create') -> name('cars.create');
//});

Route::get('/car',CarController::class);
Route::get('/cars',[CarController::class, 'index']);

/**
 * Fallback Routes
 */

Route::fallback(function () {
    return to_route('home');
});

