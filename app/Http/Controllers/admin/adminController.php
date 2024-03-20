<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Tambahkan use statement untuk Hash

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ganti 'User' dengan model User yang sebenarnya
        return view('admin.masterAdmin.dataAdmin', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.masterAdmin.createdataAdmin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required',
            'status' => 'required', // Tambahkan baris ini untuk field 'status'
        ]);

        // Menggunakan Hash::make untuk mengenkripsi password
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.admin.users')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.masterAdmin.editdataAdmin', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $password = $request->filled('password') ? Hash::make($request->password) : $user->password;

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password, // Gunakan password yang telah diambil dari request
        'role' => $request->role,
        'status' => $request->status,
    ]);

        return redirect()->route('admin.admin.users')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.admin.users')->with('success', 'User deleted successfully');
    }
}
