<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\get;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/welcome', [HelloController::class, 'welcome'])->name('welcome');

/**
 * Fallback Routes
 */
Route::fallback(function () {
    return to_route('home');
});

