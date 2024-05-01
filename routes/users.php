<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users/profile/', [UserController::class, 'getUserProfile'])->middleware('auth:sanctum');