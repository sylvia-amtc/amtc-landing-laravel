<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::post('/api/leads', [LeadController::class, 'store'])->name('leads.store');

$blogPosts = [
    'satellite-vs-srt-cost' => 'pages.blog.satellite-vs-srt-cost',
    'srt-distribution-guide' => 'pages.blog.srt-distribution-guide',
    'cdn-vs-broadcast-cdn' => 'pages.blog.cdn-vs-broadcast-cdn',
    'satellite-to-ip-migration' => 'pages.blog.satellite-to-ip-migration',
];

foreach ($blogPosts as $slug => $view) {
    Route::get("/blog/{$slug}", fn () => view($view))->name("blog.{$slug}");
}
