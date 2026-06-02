<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'nullable|string|max:50',
            'date_of_birth' => 'nullable|date',
            'course' => 'nullable|string|max:255',
        ]);

        Student::create($validated);

        return redirect()->back()->with('success', 'Student details saved successfully.');
    }
}
