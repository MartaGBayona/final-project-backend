<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsDirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/subjects', [SubjectController::class, 'getAllSubjects']);
Route::post('/courses/{courseId}/subjects', [SubjectController::class, 'postSubject'])->middleware(['auth:sanctum', IsDirector::class]);
Route::put('/subjects/{id}', [SubjectController::class, 'putCourse'])->middleware(['auth:sanctum', IsDirector::class]);
Route::delete('/subjects/{id}', [SubjectController::class, 'deleteCourse'])->middleware(['auth:sanctum', IsDirector::class]);
Route::get('/subjects/{id}', [SubjectController::class, 'getCourseById']);