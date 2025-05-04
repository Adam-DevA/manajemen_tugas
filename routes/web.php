<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[DashboardController::class, 'index']);

Route::get('dashboard',[AuthController::class, 'login'])-> name('login');
