<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// make sure you add the bath of StudentsControllers as below.
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/student', StudentController::class);