<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeImageSlider;

class HomeSliderImageController extends Controller
{
    public function index()
    {
        $pageTitle = 'Admin | Home Image Slider'; 
        $images = HomeImageSlider::all();
        return view('admin.homeslider_image.index', compact('images', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Admin | Create Home Image Slider'; 
        return view('admin.homeslider_image.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            'hms_active_status' => 'required|in:yes,no', // Adjust validation rules as needed
        ]); 

        $imagePath = $request->file('image')->store('uploads', 'public');

        HomeImageSlider::create([
            'image' => $imagePath,
            'hms_active_status' => $validatedData['hms_active_status'],
        ]);

        return redirect()->route('admin.admin.hms.image.index')->with('success', 'Home Slider Image created successfully');
    }

    public function edit($id)
    {
        $image =  HomeImageSlider::find($id);
        $pageTitle = 'Edit Home Data - ' . $image->image;
        return view('admin.homeslider_image.edit', compact('image', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            'hms_active_status' => 'required|in:yes,no', // Adjust validation rules as needed
        ]);

        $image = HomeImageSlider::find($id);

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $image->update([
                'image' => $imagePath,
                'hms_active_status' => $validatedData['hms_active_status'],
            ]);
        } else {
            $image->update([
                'hms_active_status' => $validatedData['hms_active_status'],
            ]);
        }

        return redirect()->route('admin.admin.hms.image.index')->with('success', 'Home data updated successfully');
    }

    public function destroy($id)
    {
        // Menghapus gambar slider rumah
        $image = HomeImageSlider::findOrFail($id);
        $image->delete();

        return redirect()->route('admin.admin.hms.image.index')->with('success', 'Home Slider Image deleted successfully');
    }
}
