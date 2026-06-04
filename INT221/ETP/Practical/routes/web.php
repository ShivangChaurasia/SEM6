<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\ProfileController;

Route::get('/profile/{username}', [ProfileController::class, 'display'])
    ->name('profile.show');


