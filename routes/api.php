<?php

use App\Http\Controllers\Api\Seo\AnalyticsController;
use App\Http\Controllers\Api\Seo\MetaController;
use App\Http\Controllers\VisualizationController;
use Illuminate\Support\Facades\Route;

// Public visualization endpoints
Route::get('/visualizations/srt', [VisualizationController::class, 'srtData']);
Route::get('/visualizations/cdn', [VisualizationController::class, 'cdnData']);

// Protected SEO API routes (Sanctum authentication)
Route::middleware('auth:sanctum')->prefix('seo')->group(function () {

    // Meta & On-Page SEO
    Route::get('/meta', [MetaController::class, 'index']);
    Route::get('/meta/{page}', [MetaController::class, 'show']);
    Route::post('/meta', [MetaController::class, 'store']);
    Route::put('/meta/{page}', [MetaController::class, 'update']);
    Route::delete('/meta/{page}', [MetaController::class, 'destroy']);

    // Analytics (proxy to GA/GSC)
    Route::get('/analytics/pages', [AnalyticsController::class, 'pages']);
    Route::get('/analytics/keywords', [AnalyticsController::class, 'keywords']);
    Route::get('/analytics/traffic', [AnalyticsController::class, 'traffic']);
});
