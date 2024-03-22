<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fitur;

class FiturController extends Controller
{
    public function index()
    {
        $fitur = Fitur::all();
        $pageTitle = 'Admin | Home Data';
        return view('admin.fitur.index', compact('fitur', 'pageTitle'));
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

