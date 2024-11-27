<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $aboutPageUrl = route('about');

    return view('welcome');
})->name('home');

/*
Named View Routes
*/
Route::view('/about-us', 'about') -> name('about');

/**
 * Controller Groups
 */
Route::controller(CarController::class)->group(function () {
    Route::get('/cars', 'index') -> name('cars.index');
    Route::get('/cars/create', 'create') -> name('cars.create');
});

/**
 * Fallback Routes
 */

Route::fallback(function () {
    return to_route('home');
});

