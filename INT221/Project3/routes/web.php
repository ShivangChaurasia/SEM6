<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    app()->setLocale(config('app.locale'));
    return view('welcome');
});

Route::get('en', function () {
    app()->setLocale('en');
    return view('welcome');
});

Route::get('hin', function () {
    app()->setLocale('hin');
    return view('welcome');
});

Route::get('guj', function () {
    app()->setLocale('guj');
    return view('welcome');
});

Route::get('pub', function () {
    app()->setLocale('pub');
    return view('welcome');
});


use App\Http\Controllers\formController;

Route::get('show',[formController::class,"show"]);
Route::get('submit',[formController::class,"submit"]);
