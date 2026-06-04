<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'age'=>'required|numeric|min:18',
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed'
        ]);

        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $password = $request->input('password');

        Student::create([
            'name' =>$name,
            'age' => $age,
            'gender'=> $gender,
            'email'=> $email,
            'password'=> bcrypt($password)
        ]);

        // dd($request->all());
        return view('profile',compact('name','age','gender','email'));
    }


    public function showStudents(){
        $students = Student::all();
        return view('Showdetails',compact('students'));
    }

    public function updateStudents(){
        Student::where('email','shiva17ng@gmail.com')->update(['name'=>'Updated Name']);
        

    }
}
