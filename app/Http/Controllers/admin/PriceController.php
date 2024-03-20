<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    public function index()
    {
        $price = Price::all();
        $pageTitle = 'price';
        return view('admin.price.price', compact('price', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'harga_title' => 'required',
            'harga_description' => 'required',
        ]);
        $price = Price::find($id);

        $price->update([
            'harga_title' => $validatedData['harga_title'],
            'harga_description' => $validatedData['harga_description'],
        ]);

        return redirect()->back()->with('success', 'price updated successfully');
    }
}

