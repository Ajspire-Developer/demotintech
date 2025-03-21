<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('pages.home');
});

// About Page
Route::get('/about', function () {
    return view('pages.about');
});

// Services Page
Route::get('/services', function () {
    return view('pages.services');
});

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
});
