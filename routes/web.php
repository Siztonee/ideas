<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Main page
Route::get('/', [DashboardController::class, 'index']);


// Profile page
Route::get('/profile', [ProfileController::class, 'index']);


// Terms page
Route::get('/terms', function () {
    return view('terms');
});

