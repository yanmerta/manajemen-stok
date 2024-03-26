<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $pageTitle = 'Testimoni'; 
        $testimonis = Testimoni::all();
        return view('admin.testimoni.index', compact('testimonis', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Testimon';
        return view('admin.testimoni.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'testi_name' => 'required',
            'position' => 'required',
            'testi_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
            'testi_active_status' => 'required',
        ]); 

        $imagePath = $request->file('image')->store('uploads', 'public');

        Testimoni::create([
            'image' => $imagePath,
            'testi_name' => $validatedData['testi_name'],
            'position' => $validatedData['position'],
            'testi_description' => $validatedData['testi_description'],
            'testi_active_status' => $validatedData['testi_active_status'],
        ]);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni created successfully');
    }

    public function edit($id)
{
    $testimonis = Testimoni::find($id);
    $pageTitle = 'Edit Testimoni Data - ' . $testimonis->testi_name;
    return view('admin.testimoni.edit', compact('testimonis', 'pageTitle'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'testi_name' => 'required',
        'position' => 'required',
        'testi_description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        'testi_active_status' => 'required',
    ]);

    $testimonis = Testimoni::find($id);

    if($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
        $testimonis->update([
            'image' => $imagePath,
            'testi_name' => $validatedData['testi_name'],
            'position' => $validatedData['position'],
            'testi_description' => $validatedData['testi_description'],
            'testi_active_status' => $validatedData['testi_active_status'],
        ]);
    } else {
        $testimonis->update([
            'testi_name' => $validatedData['testi_name'],
            'position' => $validatedData['position'],
            'testi_description' => $validatedData['testi_description'],
            'testi_active_status' => $validatedData['testi_active_status'],
        ]);
    }

    return redirect()->route('admin.testimoni.index')->with('success', 'Container data updated successfully');
}

public function destroy($id)
{
    $testimonis = Testimoni::findOrFail($id);
    $testimonis->delete();

    return redirect()->route('admin.testimoni.index')->with('success', 'Container deleted successfully');
}
    }

