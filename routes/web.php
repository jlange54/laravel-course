<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;

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

Route::apiResources([
    'cars' => CarController::class,
    'products' => ProductController::class,
]);

/**
 * Fallback Routes
 */

Route::fallback(function () {
    return to_route('home');
});

