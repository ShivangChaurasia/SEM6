<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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

Route::get('/send-mail', function () {
    Mail::to('recipient@example.com')->send(new TestMail());
    return 'Mail sent!';
});


use App\Http\Controllers\formController;
use App\Http\Controllers\StudentController;

Route::get('/show',[formController::class,"show"]);
Route::post('/submit',[formController::class,"submit"]);

Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);


