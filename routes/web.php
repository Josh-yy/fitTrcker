<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Login Route
Route::resource('login', LoginController::class);

// Register Route
Route::resource('register', RegisterController::class);