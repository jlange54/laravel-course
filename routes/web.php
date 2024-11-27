<?php

use App\Http\Controllers\CalculatorController;
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

Route::controller(CalculatorController::class)->group(function () {
    Route::get('/calculate/sum/{num1}+{num2}', 'addition')->name('calculate.sum')->whereNumber(['num1', 'num2']);
    Route::get('/calculate/subtract/{num1}-{num2}', 'subtraction')->name('calculate.subtract')->whereNumber(['num1', 'num2']);
});

/**
 * Fallback Routes
 */

Route::fallback(function () {
    return to_route('home');
});

