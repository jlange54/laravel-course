<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
View Routes
*/
Route::view('/about', 'about');

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
})->where(['lang' =>'[a-z]{2}','id' => '\d{1,2}']);

Route::get('/search/{keyword}', function (string $keyword) {
    return "Search: $keyword";
})->where(['keyword' => '.+']);
