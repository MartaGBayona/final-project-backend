<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Middleware\IsDirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/inscriptions', [InscriptionController::class, 'getAllInscriptions'])->middleware(['auth:sanctum', IsDirector::class]);
Route::get('/users/{userId}/inscriptions', [InscriptionController::class, 'getUserInscriptions'])->middleware('auth:sanctum');
Route::post('/courses/{courseId}/inscriptions', [InscriptionController::class, 'postInscription'])->middleware('auth:sanctum');
Route::delete('/insrciptions/{id}', [InscriptionController::class, 'deleteInscription'])->middleware('auth:sanctum');