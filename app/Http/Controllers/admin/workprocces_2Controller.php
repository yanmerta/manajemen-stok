<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkProcces_2;

class workprocces_2Controller extends Controller
{
    public function index()
    {
        $workprocces = WorkProcces_2::all();
        $pageTitle = 'Admin | WorkProcces_2';
        return view('admin.workprocces_2.Workprocces2', compact('workprocces', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'list1' => 'required',
            'list2' => 'required',
            'list3' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $workprocces = WorkProcces_2::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $workprocces->image = $imagePath;
        }

        $workprocces->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'list1' => $validatedData['list1'],
            'list2' => $validatedData['list2'],
            'list3' => $validatedData['list3'],
        ]);

        return redirect()->back()->with('success', 'Home data updated successfully');
    }
}
