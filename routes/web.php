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
Route::get('/event/{id}', function ($id) {
    return "Event id: $id";
});

/*
Route Optional Parameters
*/
Route::get('/events/{category?}', function (string $category = null) {
    return "Category: $category";
});
