<?php

use App\Http\Controllers\courseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




// Form-----------------------------------------------------------------------------
Route::get('/', function () {
    return view('form');
});

Route::get('/course', function () {
    return view('course');
});

Route::post('/user', [UserController::class, 'store']);

Route::post('/course', [courseController::class, 'store']);
















// 20th Apr; File Upload

use App\Http\Controllers\ImageController;

Route::get('file', [ImageController::class, 'show']);
Route::post('upload', [ImageController::class, 'store']);




