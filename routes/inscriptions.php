<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Middleware\IsDirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/inscriptions', [InscriptionController::class, 'getAllInscriptions'])->middleware(['auth:sanctum', IsDirector::class]);
// Route::get('/inscriptions', [InscriptionController::class, 'getAllMyInscriptions'])->middleware('auth:sanctum');
Route::post('/inscriptions', [InscriptionController::class, 'postInscriptions'])->middleware('auth:sanctum');
Route::delete('/insrciption/{id}', [InscriptionController::class, 'deleteInscription'])->middleware('auth:sanctum');