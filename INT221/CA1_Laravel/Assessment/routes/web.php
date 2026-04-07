<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/student/{id}', [StudentController::class, 'handle']);
