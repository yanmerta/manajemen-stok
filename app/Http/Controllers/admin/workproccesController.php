<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkProcces;

class workproccesController extends Controller
{
    public function index()
    {
        $procces = WorkProcces::all();
        $pageTitle = 'Admin | WorkProcces';
        return view('admin.workprocces.Workprocces', compact('procces', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'title_description' => 'required',
            'description' => 'required',
            'list1' => 'required',
            'list2' => 'required',
            'list3' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $procces = WorkProcces::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $procces->image = $imagePath;
        }

        $procces->update([
            'title' => $validatedData['title'],
            'sub_title' => $validatedData['sub_title'],
            'title_description' => $validatedData['title_description'],
            'description' => $validatedData['description'],
            'list1' => $validatedData['list1'],
            'list2' => $validatedData['list2'],
            'list3' => $validatedData['list3'],
        ]);

        return redirect()->back()->with('success', 'Home data updated successfully');
    }
}

