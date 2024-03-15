<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\Home;

class HomeSliderController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home'; 
        $homeSlider = HomeSlider::all()[0];
        // dd($homeSlider);
        return view('admin.homeslider.index', compact('homeSlider', 'pageTitle')); // Updated variable names
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'hms_title' => 'required',
        'hms_description' => 'required',
        'hms_active_status' => 'required|in:yes,no',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        // Add validation for other fields as needed
    ]);

    $hms = HomeSlider::create($validatedData);

    // Handle image upload
    $imagePath = $request->file('image')->store('uploads', 'public');

    // $hms->images()->create([
    //     'image_path' => $imagePath,
    // ]);

    return redirect()->route('admin.admin.hms.index')->with('success', 'Hms data created successfully');
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'hms_title' => 'required',
        'hms_description' => 'required',
        // Add validation for other fields as needed
    ]);

    $hms = HomeSlider::findOrFail($id);
    $hms->update($validatedData);

    // Handle image update
    // if ($request->hasFile('image')) {

    //     $imagePath = $request->file('image')->store('uploads', 'public');
    //     $hms->images()->update([
    //         'image_path' => $imagePath,
    //     ]);
    // }

    return redirect()->back()->with('success', 'Hms data updated successfully');
}
}