<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'skill' => 'sometimes|array',
            'skill.*' => 'string',
            'gender' => 'required|string|in:Male,Female',
        ]);

        return view('coursedetails', [
            'skills' => $validated['skill'] ?? [],
            'gender' => $validated['gender'],
        ]);
    }
}
