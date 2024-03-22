<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContainerMenu;

class ContainerMenuController extends Controller
{
    public function index()
    {
        $pageTitle = 'Admin | Container'; 
        $container = ContainerMenu::all();
        return view('admin.container_menu.index', compact('container', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Container';
        return view('admin.container_menu.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'container_title' => 'required',
            'container_description' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]); 

        $imagePath = $request->file('logo')->store('uploads', 'public');

        ContainerMenu::create([
            'logo' => $imagePath,
            'container_title' => $validatedData['container_title'],
            'container_description' => $validatedData['container_description'],
        ]);

        return redirect()->route('admin.admin.container.index')->with('success', 'Container created successfully');
    }

    public function edit($id)
{
    $container = ContainerMenu::find($id);
    $pageTitle = 'Edit Container Data - ' . $container->container_title;
    return view('admin.container_menu.edit', compact('container', 'pageTitle'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'container_title' => 'required',
        'container_description' => 'required',
        'logo' => 'image|mimes:jpeg,png,jpg,svg,gif|max:2048', // Adjust validation rules as needed
    ]);

    $container = ContainerMenu::find($id);

    if($request->hasFile('logo')) {
        $imagePath = $request->file('logo')->store('uploads', 'public');
        $container->update([
            'logo' => $imagePath,
            'container_title' => $validatedData['container_title'],
            'container_description' => $validatedData['container_description'],
        ]);
    } else {
        $container->update([
            'container_title' => $validatedData['container_title'],
            'container_description' => $validatedData['container_description'],
        ]);
    }

    return redirect()->route('admin.admin.container.index')->with('success', 'Container data updated successfully');
}

public function destroy($id)
{
    $container = ContainerMenu::findOrFail($id);
    $container->delete();

    return redirect()->route('admin.admin.container.index')->with('success', 'Container deleted successfully');
}
    }