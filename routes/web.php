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

Route::get('/blog/{slug}', function (string $slug) {
    return view('welcome'); // placeholder
})->where('slug', '[a-z0-9\-]+')->name('blog.show');
