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
 * Controllers
 */
Route::get('/cars',[CarController::class,'index'])->name('cars.index');

/**
 * Fallback Routes
 */

Route::fallback(function () {
    return to_route('home');
});

