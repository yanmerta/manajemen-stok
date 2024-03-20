<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeSlider;
use App\Models\HomeImageSlider;
use Illuminate\Http\Request;
use App\Models\Fitur;
use App\Models\ContainerMenu;
use App\Models\FiturContainerMenu;
use App\Models\WorkProcces;
use App\Models\WorkProcces_2;
use App\Models\GalleryImage;
use App\Models\Gallery;
use App\Models\Combine;
use App\Models\Price;
use App\Models\ListPrice;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index(){
        $data = Home::all();
        $homeSlider = HomeSlider::all();
        $fitur = Fitur::all();
        $procces = WorkProcces::all();
        $gallery = Gallery::all();
        $workprocces = WorkProcces_2::all();
        $combine = Combine::all();
        $price = Price::all();
        $contacts = Contact::all();
        return view('user.home', [
            'data'=> $data[0],
            'homeSlider' => $homeSlider[0],
            'fitur' => $fitur[0],
            'homeSliderImage' => HomeImageSlider::all(),
            'container' => ContainerMenu::all(),
            'dataFiturMenu' => FiturContainerMenu::all(),
            'workprocces' => $procces[0],
            'workprocces_2' => $workprocces[0],
            'gallery' => $gallery[0],
            'galleryimage' => GalleryImage::all(),
            'combine' => $combine[0],
            'price' => $price[0],
            'listprice' => ListPrice::all(),
            'contacts' => $contacts[0],

        ]);
    }
}
