<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming user form submission.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ], ['email.required' => 'Enter Email, It is compulsory!']);

        $name = $request->input("name");
        $course = $request->input("course");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $btn = $request->input("btn");

        return view('user', compact("name","course","email", "phone", "btn"));
    }
}
