<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about',function(){
    return "This is About";
});

Route::get("/name/{person_name}",function($person_name){
    return $person_name;
});

Route::get("display/{first}/{last?}",function($first,$last =null){

    // return "First Name: $first, Last Name: $last ";
    return $first.$last ;
});

Route::get("/",function(){
    return view("student");
});

Route::get("/data",function(){
    $name = "Shivang";
    return view("databyarray",["name" =>$name]);
});


Route::get("/home",function(){
    return view("home");
});











