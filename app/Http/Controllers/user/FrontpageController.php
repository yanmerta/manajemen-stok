<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\HomeSlider;
use App\Models\HomeImageSlider;
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
use App\Models\Post;

class FrontpageController extends Controller
{
    public function index(){
        $data = Home::all();
        $homeSlider = HomeSlider::all();
        $combine = Combine::all();
        $contacts = Contact::all();
        return view('user.frontpage.home', [
            'data'=> $data[0],
            'homeSlider' => $homeSlider[0],
            // 'fitur' => $fitur[0],
            'homeSliderImage' => HomeImageSlider::all(),
            'container' => ContainerMenu::all(),
            'combine' => $combine[0],
            'contacts' => $contacts[0],
            'active' => 'index'

        ]);
    }

    public function fitur(){
        $fitur = Fitur::all();
        $procces = WorkProcces::all();
        $workprocces = WorkProcces_2::all();
        $combine = Combine::all();
        return view('user.frontpage.fitur', [
            'dataFiturMenu' => FiturContainerMenu::all(),
            'fitur' => $fitur[0],
            'workprocces' => $procces[0],
            'workprocces_2' => $workprocces[0],
            'combine' => $combine[0],
            'active' => 'fitur'
        ]);
    }

    public function gallery(){
        $gallery = Gallery::all();
        return view ('user.frontpage.galeriaplikasi', [
            'gallery' => $gallery[0],
            'galleryimage' => GalleryImage::all(),
            'active' => 'gallery'
         ]);
    }

    public function price(){
        $price = Price::all();
        return view ('user.frontpage.harga', [
            'price' => $price[0],
            'listprice' => ListPrice::all(),
            'active' => 'price'
        ]);
    }

    public function blog(){
        return view ('user.frontpage.blog', [
            'active' => 'blog',
            'blog' => Post::all()
        ]);
    }
}

