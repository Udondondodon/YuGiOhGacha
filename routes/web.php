<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

// Home
Route::get('/', [MainController::class, 'home',])->name('home')->middleware('guest');
Route::get('/login', [MainController::class, 'log',])->middleware('guest');

// Register
Route::get('/register', [MainController::class, 'register',])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

// Login
Route::post('/login', [AuthController::class, 'login',]);

// Logout
Route::post('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard')->middleware('Login');

// Gacha
Route::get('/gacha', [MainController::class, 'gacha'])->middleware('Login');

// Inventory
Route::get('/inventory', [MainController::class, 'inventory'])->middleware('Login');
Route::get('/card/{id}', [MainController::class, 'detail'])->middleware('Login');

// Update Gems
Route::get('/increase', [MainController::class, 'increase'])->name('increase-gems');