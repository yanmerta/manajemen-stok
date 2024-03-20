<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryImage;

class Gallery_imageController extends Controller
{
    public function index()
    {
        $pageTitle = 'Gallery'; 
        $gallery = GalleryImage::all();
        return view('admin.galleryimage.index', compact('gallery', 'pageTitle'));
    }

    public function create()
    {
        return view('admin.galleryimage.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gallery_image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'gallery_active_status' => 'required|in:yes,no', 
        ]); 

        $imagePath = $request->file('gallery_image')->store('uploads', 'public');

        GalleryImage::create([
            'gallery_image' => $imagePath,
            'gallery_active_status' => $validatedData['gallery_active_status'],
        ]);

        return redirect()->route('admin.gallery.image.index')->with('success', 'Gallery Image created successfully');
    }

    public function edit($id)
    {
        $gallery =  GalleryImage::find($id);
        $pageTitle = 'Edit Gallery Image - ' . $gallery->gallery_image;
        return view('admin.galleryimage.edit', compact('gallery', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'gallery_image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'gallery_active_status' => 'required|in:yes,no', 
        ]);

        $gallery = GalleryImage::find($id);

        if($request->hasFile('gallery_image')) {
            $imagePath = $request->file('gallery_image')->store('uploads', 'public');
            $gallery->update([
                'gallery_image' => $imagePath,
                'gallery_active_status' => $validatedData['gallery_active_status'],
            ]);
        } else {
            $gallery->update([
                'gallery_active_status' => $validatedData['gallery_active_status'],
            ]);
        }

        return redirect()->route('admin.gallery.image.index')->with('success', 'Gallery Image updated successfully');
    }

    public function destroy($id)
    {
        $gallery = GalleryImage::findOrFail($id);
        $gallery->delete();

        return redirect()->route('admin.gallery.image.index')->with('success', 'Gallery Image deleted successfully');
    }
}

