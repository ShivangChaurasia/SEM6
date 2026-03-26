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
}
