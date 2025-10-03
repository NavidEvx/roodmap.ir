<?php

use App\Http\Controllers\Api\RoadmapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('roadmaps', RoadmapController::class)->only(['index', 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
