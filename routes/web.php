<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/new', [WelcomeController::class, 'controllerMethod']);

Route::view('/skills', 'welcome');

// If there's no route match
Route::any('{slug}', [WelcomeController::class, 'any']);
