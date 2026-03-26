<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    public function index(Request $request, $name = 'Guest')
    {
        $studentname = $name;
        $num = 10;
        return view('studenthome', compact('studentname','num'));
    }


    function about(){
        $num = 5;
        return view('studentabout',compact('num'));
    }

    function data(){
        $studentdata=[
            ["Name"=>"Amit","Courses"=>"Python","City"=>"Jalandhar"],
            ["Name"=>"Amit","Courses"=>"Python","City"=>"Jalandhar"],
            ["Name"=>"Amit","Courses"=>"Python","City"=>"Jalandhar"],
            ["Name"=>"Amit","Courses"=>"Python","City"=>"Jalandhar"],
            ["Name"=>"Amit","Courses"=>"Python","City"=>"Jalandhar"],
            ["Name"=>"Amit","Courses"=>"Python","City"=>"Jalandhar"],
        ];

        return view("aboutpage",compact("studentdata"));

    }
}
