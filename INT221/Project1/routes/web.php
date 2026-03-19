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

Route::get("/student",function(){
    return view("student");
});

// Route::get("/data",function(){
//     $name = "Shivang";
//     $city = "Jalandhar";
//     return view("databyarray",["name" =>$name, "city"=>$city]);
// });

// Route::get("/data",function(){
//     // $name = "Shivang";
//     // $city = "Jalandhar";
//     return view("databyarray")->with("name", "Shivang")->with("city", "Jalanddar");
// });
// Route::get("/data",function(){
//     $name = "Shivang";
//     $city = "Jalandhar";
//     return view("databyarray",compact('name','city'));
// });


Route::get("/data/{name}/{city}",function($name, $city){
    return view("databyarray",compact('name','city'));
});





Route::get("/home",function(){
    return view("home");
});


Route::get("example2/{nums}",function($nums){
    if($nums%2==0){
        return"Even";
    }
    else{
        return"Odd";
    }
});


Route::get("Home/",function(){
    return view('welcome');
});

Route::get("updatedPage/",function(){
    return redirect('Home');
});

Route::get("aboutPage/{name}",function($name){
    return "welcome to the about page: $name";
});

Route::get("aboutPage/{username}",function($username){
    return redirect("aboutPage/$username");
});


Route::get("aboutPage/{name?}", function ($name = null) {
    if($name){
        return "Welcome to the about page: $name";
    }else{
        return "Welcome to the about page";
    }
});


Route::get("productPage", function(){
    return view("ProductPage");
});
Route::get("ContactPage", function(){
    return view("ContactPage");
});
Route::get("listPage", function(){
    return view("listPage");
});

// Route::get("aboutPage/{name?}", function ($name = null) {
//     if (!$name) {
//         return redirect("aboutPage/Guest");
//     }
//     return "Welcome to the about page: $name";
// });


// Route::get("aboutPage/{name?}",function($name=null){
//     return "welcome to the about page: $name";
// });

// Route::get("aboutPage/{username?}",function($username=null){
//     return redirect("aboutPage/$username");
// });


//Attaching Headers in Laravel

// Route::get("Header", function () {
//     return response("Header set")
//             ->header("Content-Type", "text/plain")
//             ->header("Custom-Header", "LPU");
// });




//cookies-impostant for etp
// Route::get("set",function(){
//     return response ("cookie set")->cookie("username","lpu",60);

// });


// use Illuminate\Http\Request;

// Route::get("get", function (Request $request) {
//     return $request->cookie('username');
// });

// Route::get("delete", function () {
//     return response("cookie deleted")->cookie("username",null,-1);
// });


// // JSON response
// Route::get("json", function () {
//     return response()->json([
//         "name" => "Riya",
//         "course" => "Computer Science",
//         "city" => "Jalnadhar"
//     ]);
// });



// 19/03/26------------------------------------

Route::get("jsondata/", function(){
    return response()->json(["Name"=>"Submit", "Course"=>["Laravel", "python", "Java"], "city"=>"Jalandhar"]);
});



Route::get("setcookiedata",function(){
    return response("cookie Set")->cookie("username", "Laravel2", 60);
});

Route::get("/name/student/index",function(){
    return view("student");
})->name("si");


Route::get("/name/teacher/index",function(){
    return view("teacher");
})->name("ti");


Route::get("/name/other/index",function(){
    return view("others");
})->name("oi");



Route::get("admin/product/index",function(){
    return "this is product home page";
})->name("op");


Route::get("admin/product/home",function(){
    return redirect()->route("op");
});


use App\Http\Controllers\ProductController;

Route::get("/firstController",[ProductController::class, "index"]);
Route::get("/firstController",[ProductController::class, "about"]);






