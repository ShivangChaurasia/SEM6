<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
    public function store(Request $request)
    {
        $skills = $request->input("skill");
        $gender = $request->input("gender");
        $city = $request->input("city");

        return view('coursedetails', compact(
            'skills','gender','city'
        ));
    }
}
