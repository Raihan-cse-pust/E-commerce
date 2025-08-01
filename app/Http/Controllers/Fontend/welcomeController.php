<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        $sliders = DB::table('sliders')->where('status', 1)->get();
        $testimonials = DB::table('testimonials')->where('status', 1)->get();
        return view('welcome', compact('sliders', 'testimonials'));
    }
}
