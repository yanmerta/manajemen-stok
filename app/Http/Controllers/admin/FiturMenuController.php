<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiturMenuController extends Controller
{
    public function index()
    {
        $fitur = Fitur_Menu::all();
        $pageTitle = 'Fitur Data';
        return view('admin.fitur.index', compact('fitur', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Home Data';
        return view('admin.home.homedatacreate', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fitur_menu_title' => 'required',
            'fitur_menu_description' => 'required',
            'fitur_menu_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            // Add validation for other fields as needed
        ]);

        $imagePath = $request->file('home_image')->store('uploads', 'public');

        Home::create([
            'home_title' => $validatedData['home_title'],
            'fitur_menu_description' => $validatedData['fitur_menu_'],
            'home_image' => $imagePath,
            'home_advantage' => $validatedData['home_advantage'],
            // Add other fields as needed
        ]);

        return redirect()->route('admin.home.index')->with('success', 'Home data created successfully');
    }

    public function edit($fitur_id)
    {
        // $home = Home::find($home_id);
        $fitur = Fitur::find($fitur_id);
        $pageTitle = 'Edit Home Data - ' . $fitur->fitur_title;
        return view('admin.home.homepageedit', compact('fitur', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fitur_title' => 'required',
            'fitur_subtitle' => 'required',
            // Add validation for other fields as needed
        ]);

        $home = Fitur::find($id);

        $home->update([
            'fitur_title' => $validatedData['fitur_title'],
            'fitur_subtitle' => $validatedData['fitur_subtitle'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Home data updated successfully');
    }
}

