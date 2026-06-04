<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RegisterController;

Route::get('/register',function(){
    return view('register');
});

Route::post('/register',[RegisterController::class, 'store']);

Route::get('/show',[RegisterController::class,'showStudents']);
Route::get('/update', [RegisterController::class,'updateStudents']);


