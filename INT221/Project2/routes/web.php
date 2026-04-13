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





// Localization-----------------------------------------------------------------------


