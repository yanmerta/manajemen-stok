<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeSlider;
use App\Models\HomeImageSlider;
use Illuminate\Http\Request;
use App\Models\Fitur;
use App\Models\ContainerMenu;

class HomeController extends Controller
{
    public function index(){
        $data = Home::all();
        $homeSlider = HomeSlider::all();
        $fitur = Fitur::all();
        // dd($data);
        return view('user.home', [
            'data'=> $data[0],
            'homeSlider' => $homeSlider[0],
            'fitur' => $fitur[0],
            'homeSliderImage' => HomeImageSlider::all(),
            'container' => ContainerMenu::all(),

        ]);
    }
}
