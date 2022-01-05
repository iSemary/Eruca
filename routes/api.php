<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/skills', [SkillController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store']);
