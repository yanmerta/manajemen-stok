<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $pageTitle = 'Admin | Contact';
        return view('admin.contact.contact', compact('contacts', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'button_teks' => 'required',
            'button_url' => 'required',
        ]);
        $contacts = Contact::find($id);

        $contacts->update([
            'title' => $validatedData['title'],
            'button_teks' => $validatedData['button_teks'],
            'button_url' => $validatedData['button_url'],
        ]);

        return redirect()->back()->with('success', 'contacts updated successfully');
    }
}

