<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        return "This is ProductController index";
    }

    function about(){
        return "This is about in ProductController";
    }

}
