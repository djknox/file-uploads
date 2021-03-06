<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index');
    }

    public function show()
    {
    }

    public function store(Request $request)
    {
        // validate incoming file
        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'There is no image present.'], 400);
        }

        $request->validate([
            'image' => 'required|file|image',
        ]);

        // save the file in storage
        $path = $request->file('image')->store('public/images');

        if (!$path) {
            return response()->json(['error' => 'The file could not be saved.'], 500);
        }

        // create an image record
        $uploadedFile = $request->file('image');

        $image = Image::create([
            'name' => $uploadedFile->hashName(),
            'extension' => $uploadedFile->extension(),
            'size' => $uploadedFile->getSize(),
        ]);

        // return the image record back to the UI
        return $image;
    }
}
