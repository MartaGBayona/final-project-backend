<?php

use App\Http\Controllers\CourseController;
use App\Http\Middleware\IsDirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseController::class, 'getAllCourses']);
Route::post('/courses', [CourseController::class, 'postCourse'])->middleware(['auth:sanctum', IsDirector::class]);
Route::put('/courses/{id}', [CourseController::class, 'putCourse'])->middleware(['auth:sanctum', IsDirector::class]);
Route::delete('/courses/{id}', [CourseController::class, 'deleteCourse'])->middleware(['auth:sanctum', IsDirector::class]);