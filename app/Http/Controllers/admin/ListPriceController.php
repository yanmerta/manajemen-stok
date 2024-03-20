<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ListPrice;
use Illuminate\Http\Request;

class ListPriceController extends Controller
{
    public function index()
    {
        $pageTitle = 'ListPrice'; 
        $listprice = ListPrice::all();
        return view('admin.listprice.index', compact('listprice', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Container';
        return view('admin.listprice.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'listprice_title' => 'required',
            'listprice_description' => 'required',
            'listprice_image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
            'price' => 'required',
            'service1' => 'required',
            'service2' => 'required',
            'service3' => 'required',
            'service4' => 'required',
            'service5' => 'required',
            'service6' => 'required',
            'service7' => 'required',
            'button_teks' => 'required',
            'button_url' => 'required',
        ]); 

        $imagePath = $request->file('listprice_image')->store('uploads', 'public');

        ListPrice::create([
            'listprice_title' => $validatedData['listprice_title'],
            'listprice_description' => $validatedData['listprice_description'],
            'listprice_image' => $imagePath,
            'price' => $validatedData['price'],
            'service1' => $validatedData['service1'],
            'service2' => $validatedData['service2'],
            'service3' => $validatedData['service3'],
            'service4' => $validatedData['service4'],
            'service5' => $validatedData['service5'],
            'service6' => $validatedData['service6'],
            'service7' => $validatedData['service7'],
            'button_teks' => $validatedData['button_teks'],
            'button_url' => $validatedData['button_url'],
        ]);

        return redirect()->route('admin.listprice.index')->with('success', 'Listprice created successfully');
    }

    public function edit($id)
{
        $listprice = ListPrice::find($id);
        $pageTitle = 'Edit Container Data - ' . $listprice->listprice_title;
        return view('admin.listprice.edit', compact('listprice', 'pageTitle'));
}

public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'listprice_title' => 'required',
            'listprice_description' => 'required',
            'listprice_image' => 'image|mimes:jpeg,png,jpg,svg,gif',
            'price' => 'required',
            'service1' => 'required',
            'service1_active' => 'required',
            'service2' => 'required',
            'service3' => 'required',
            'service4' => 'required',
            'service5' => 'required',
            'service6' => 'required',
            'service7' => 'required',
            'button_teks' => 'required',
            'button_url' => 'required|url',
        ]);

        $listprice = ListPrice::find($id);

        if ($request->hasFile('listprice_image')) {
            $imagePath = $request->file('listprice_image')->store('uploads', 'public');
            $listprice->update([
                'listprice_image' => $imagePath,
            ]);
        }

        $listprice->update([
            'listprice_title' => $validatedData['listprice_title'],
            'listprice_description' => $validatedData['listprice_description'],
            'price' => $validatedData['price'],
            'service1' => $validatedData['service1'],
            'service2' => $validatedData['service2'] == '1' ? 1 : 0,
            'service2' => $validatedData['service2'],
            'service3' => $validatedData['service3'],
            'service4' => $validatedData['service4'],
            'service5' => $validatedData['service5'],
            'service6' => $validatedData['service6'],
            'service7' => $validatedData['service7'],
            'button_teks' => $validatedData['button_teks'],
            'button_url' => $validatedData['button_url'],
        ]);

        return redirect()->route('admin.listprice.index')->with('success', 'Container data updated successfully');
    }

    public function destroy($id)
    {
        $listPrice = ListPrice::findOrFail($id);
        $listPrice->delete();

        return redirect()->route('admin.listprice.index')->with('success', 'Container deleted successfully');
    }
}