<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function handle($id)
    {
        $students = [
            1 => [
                'user' => [
                    'id' => 1,
                    'name' => 'Raman',
                    'course' => 'BCA',
                    'city' => 'Delhi',
                ],
            ],
            2 => [
                'user' => [
                    'id' => 2,
                    'name' => 'Amit',
                    'course' => 'MCA',
                    'city' => 'Mumbai',
                ],
            ],
            3 => [
                'user' => [
                    'id' => 3,
                    'name' => 'Neha',
                    'course' => 'B.Tech',
                    'city' => 'Chandigarh',
                ],
            ],
        ];

        $student = $students[$id] ?? null;

        return view('student', compact('student', 'id'));
    }
}
