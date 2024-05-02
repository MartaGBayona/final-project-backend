<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsDirector;

Route::get('/users/profile/', [UserController::class, 'getUserProfile'])->middleware('auth:sanctum');
Route::get('/users', [UserController::class, 'getAllUsers'])->middleware(['auth:sanctum', IsDirector::class]);