<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $data = Home::all();
        $pageTitle = 'Admin | Dashboard';
        $jumlahuser = User::count();
        // dd($data);
        return view('admin.Dashboard', compact('data', 'pageTitle', 'jumlahuser'));

    }
}
