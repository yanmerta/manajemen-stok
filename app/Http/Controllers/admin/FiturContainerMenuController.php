<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FiturContainerMenu;

class FiturContainerMenuController extends Controller
{
    public function index()
    {
        $pageTitle = ' Admin | Fitur Menu'; 
        $fiturmenu = FiturContainerMenu::all();
        return view('admin.fitur_menu.index', compact('fiturmenu', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Container';
        return view('admin.fitur_menu.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fitur_menu_title' => 'required',
            'fitur_menu_description' => 'required',
            'fitur_menu_image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]); 

        $imagePath = $request->file('fitur_menu_image')->store('uploads', 'public');

        FiturContainerMenu::create([
            'fitur_menu_image' => $imagePath,
            'fitur_menu_title' => $validatedData['fitur_menu_title'],
            'fitur_menu_description' => $validatedData['fitur_menu_description'],
        ]);

        return redirect()->route('admin.fiturmenu.index')->with('success', 'Container created successfully');
    }

    public function edit($id)
{
    $fiturmenu = FiturContainerMenu::find($id);
    $pageTitle = 'Edit Container Data - ' . $fiturmenu->fitur_menu_title;
    return view('admin.fitur_menu.edit', compact('fiturmenu', 'pageTitle'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'fitur_menu_title' => 'required',
        'fitur_menu_description' => 'required',
        'fitur_menu_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Adjust validation rules as needed
    ]);

    $fiturmenu = FiturContainerMenu::find($id);

    if($request->hasFile('fitur_menu_image')) {
        $imagePath = $request->file('fitur_menu_image')->store('uploads', 'public');
        $fiturmenu->update([
            'fitur_menu_image' => $imagePath,
            'fitur_menu_title' => $validatedData['fitur_menu_title'],
            'fitur_menu_description' => $validatedData['fitur_menu_description'],
        ]);
    } else {
        $fiturmenu->update([
            'fitur_menu_title' => $validatedData['fitur_menu_title'],
            'fitur_menu_description' => $validatedData['fitur_menu_description'],
        ]);
    }

    return redirect()->route('admin.fiturmenu.index')->with('success', 'Container data updated successfully');
}

public function destroy($id)
{
    $fiturmenu = FiturContainerMenu::findOrFail($id);
    $fiturmenu->delete();

    return redirect()->route('admin.fiturmenu.index')->with('success', 'Container deleted successfully');
}
    }
