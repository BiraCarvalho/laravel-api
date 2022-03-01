<?php

use App\Http\Controllers\Api\CourseController;
use Illuminate\Support\Facades\Route;

Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{identify}', [CourseController::class, 'show']);
Route::delete('/course/{identify}', [CourseController::class, 'destroy']);

Route::get('/', function(){
    return response()->json(['message' => 'ok']);
});
