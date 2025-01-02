<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        try {
            if ($request->hasFile('image')) {
                // Get file from request
                $file = $request->file('image');
                
                // Generate unique filename
                $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                
                // Store file in public/uploads directory
                $file->storeAs('public/uploads', $fileName);
                
                // Generate public URL
                $url = Storage::url('uploads/' . $fileName);
                
                return response()->json([
                    'success' => true,
                    'message' => 'Image uploaded successfully',
                    'url' => $url,
                    'name' => $fileName
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Upload failed: ' . $e->getMessage()
            ], 500);
        }
    }
}