<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Combine;

class combineController extends Controller
{
    public function index()
    {
        $combine = Combine::all();
        $pageTitle = 'Admin | combine';
        return view('admin.combine.combine', compact('combine', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'list1' => 'required',
            'list2' => 'required',
            'list3' => 'required',
            'contact' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $combine = Combine::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $combine->image = $imagePath;
        }

        $combine->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'list1' => $validatedData['list1'],
            'list2' => $validatedData['list2'],
            'list3' => $validatedData['list3'],
            'contact' => $validatedData['contact'],
        ]);

        return redirect()->back()->with('success', 'combine updated successfully');
    }
}

