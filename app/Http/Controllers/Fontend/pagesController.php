<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function termsConditions(){
        return view('font.pages.terms-conditions');
    }

    public function privacyPolicy(){
        return view('font.pages.privacy-policy');
    }

    public function aboutUs(){
        return view('font.pages.about-us');
    }

    public function contractUs(){
        return view('font.pages.contract-us');
    }

    public function faq(){
        return view('font.pages.faq');
    }
}
