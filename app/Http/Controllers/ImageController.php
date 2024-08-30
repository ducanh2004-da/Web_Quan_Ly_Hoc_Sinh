<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $imagePath = $request->image->storeAs('images', $imageName, 'public');

        Image::create([
            'file_name' => $imageName,
            'file_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
    public function show()
    {
        $images = Image::all();
        // dd($images); // This will output the images data and halt execution
        return view('home', compact('images'));
    }
}
