<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function aboutUs(){
        $data=Page::where('slug', 'about-us')->first();
        return view('font.pages.about-us',compact('data'));
    }
    public function termsConditions(){
        $data=Page::where('slug', 'terms-and-conditions')->first();
        return view('font.pages.trems-conditions',compact('data'));
    }

    public function privacyPolicy(){
        $data=Page::where('slug', 'privacy-policy')->first();
        return view('font.pages.privacy-policy',compact('data'));
    }



    public function contractUs(){
        $data=Page::where('slug', 'contact')->first();
        return view('font.pages.contract-us',compact('data'));
    }

    public function faq(){
        $data=Page::where('slug', 'faq')->first();
        return view('font.pages.faq',compact('data'));
    }
}
