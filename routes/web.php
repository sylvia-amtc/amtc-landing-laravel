<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/privacy', function () {
    return view('welcome'); // placeholder
})->name('privacy');

Route::get('/terms', function () {
    return view('welcome'); // placeholder
})->name('terms');
