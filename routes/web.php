<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $aboutPageUrl = route('about');
    $eventPageUrl = route('event', ['lang' => 'de', 'id' => '1']);

    return view('welcome');
})->name('home');

/*
Named View Routes
*/
Route::view('/about-us', 'about') -> name('about');

/*
Route Required Parameters
*/
//Route::get('/event/{id}', function ($id) {
//    return "It works: $id";
//});

/*
Route Optional Parameters
*/
Route::get('/events/{category?}', function (string $category = null) {
    return "Category: $category";
});

/**
 * Route Parameter Validation
 */

Route::get('/user/{username}', function (string $username) {
    return "User name: $username";
})->where(['username' => '[a-z]+']);

Route::get('{lang}/event/{id}', function ($lang, $id) {
    return "It works: $id";
})->where(['lang' =>'[a-z]{2}','id' => '\d{1,2}'])->name('event');

Route::get('/search/{keyword}', function (string $keyword) {
    return "Search: $keyword";
})->where(['keyword' => '.+']);


/**
 * Named Routes Parameters
 */

Route::get('/user/profile',function () {})->name('user.profile');

Route::get('current-user',function () {
    return to_route('user.profile');
})->name('current-user');

/**
 * Route Groups
 */

Route::prefix('admin')->group(function () {
    Route::get('/users',function () {
        return '/admin/users';
    });
});

Route::namespace('admin.')->group(function () {
    Route::get('users',function () {
        return '/users';
    });
});

/**
 * Fallback Routes
 */

Route::fallback(function () {
    return to_route('home');
});

/**
 * Number addition route
 */

Route::get('/calc/{num1}+{num2}', function ($num1, $num2) {
    return $num1 + $num2;
})->name('calc')->where(['num1' => '\d+', 'num2' => '\d+']);


