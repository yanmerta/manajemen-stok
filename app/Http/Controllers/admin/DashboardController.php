<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = Home::all();
        // dd($data);
        return view('admin.Dashboard', [
        ]);
    }
}
