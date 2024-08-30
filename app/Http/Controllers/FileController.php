<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fileupload;

class FileController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $imagePath = $request->image->storeAs('images', $imageName, 'public');

        FileUpload::create([
            'file_name' => $imageName,
            'file_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
    
}
