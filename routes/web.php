<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginContoller;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\get;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/signup', [SignupController::class, 'create'])->name('signup');

Route::get('/login' , [LoginContoller::class, 'create'])->name('login');

/**
 * Fallback Routes
 */
Route::fallback(function () {
    return to_route('home');
});

