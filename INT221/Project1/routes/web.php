<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about',function(){
    return "This is About";
});

Route::get("display/{first}/{last?}",function($first,$last = "NA"){
    return "First Name: $first, Last Name: $last ";
});

Route::get("/",function(){
    return view("student");
});

Route::get("/data",function(){
    $name = "Shivang";
    return view("databyarray",["name" =>$name]);
});











