<?php

// app/Http/Controllers/admin/HomePageController.php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $pageTitle = 'Admin | Home Data List';
        return view('admin.home.homedatalist', compact('homes', 'pageTitle'));
    }

    public function edit($home_id)
    {
        // $home = Home::find($home_id);
        $home = Home::find($home_id);
        $pageTitle = 'Edit Home Data - ' . $home->home_title;
        return view('admin.home.homepageedit', compact('home', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'home_title' => 'required',
            'home_subtitle' => 'required',
            'home_description' => 'required',
            'home_contactme' => 'required',
            'home_video' => 'required',
            'home_image' => 'image|mimes:jpeg,png,jpg,gif',
            'home_advantage_1' => 'required',
            'home_advantage_2' => 'required',
            'home_advantage_3' => 'required',
            // Add validation for other fields as needed
        ]);

        $home = Home::find($id);

        if ($request->hasFile('home_image')) {
            $imagePath = $request->file('home_image')->store('uploads', 'public');
            $home->home_image = $imagePath;
        }

        $home->update([
            'home_title' => $validatedData['home_title'],
            'home_subtitle' => $validatedData['home_subtitle'],
            'home_description' => $validatedData['home_description'],
            'home_contactme' => $validatedData['home_contactme'],
            'home_video' => $validatedData['home_video'],
            'home_advantage_1' => $validatedData['home_advantage_1'],
            'home_advantage_2' => $validatedData['home_advantage_2'],
            'home_advantage_3' => $validatedData['home_advantage_3'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Home data updated successfully');
    }

    public function destroy($id)
    {
        $home = Home::find($id);
        $home->delete();
        return redirect()->route('admin.home.index')->with('success', 'Home data deleted successfully');
    }
}
