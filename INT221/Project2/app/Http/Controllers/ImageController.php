<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show(): \Illuminate\Contracts\View\View
    {
        return view('file');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
        ]);

        $file = $request->file('image');
        $path = $file->store('uploads', 'public');

        return back()->with([
            'success' => 'Image uploaded successfully.',
            'filename' => $file->getClientOriginalName(),
            'path' => $path,
        ]);
    }
}
