<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function show(){
        return view('form');
    }

    public function submit(Request $request){
        $file = $request->file('file');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        return back()->with('success', 'File uploaded successfully!');
    }
};


