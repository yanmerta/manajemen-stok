<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        $pageTitle = 'Admin | Gallery';
        return view('admin.Gallery.Gallery', compact('gallery', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'gallery_title' => 'required',
            'gallery_subtitle' => 'required',
            'gallery_description' => 'required',
        ]);
        $gallery = Gallery::find($id);

        $gallery->update([
            'gallery_title' => $validatedData['gallery_title'],
            'gallery_subtitle' => $validatedData['gallery_subtitle'],
            'gallery_description' => $validatedData['gallery_description'],
        ]);

        return redirect()->back()->with('success', 'Gallery updated successfully');
    }
}
