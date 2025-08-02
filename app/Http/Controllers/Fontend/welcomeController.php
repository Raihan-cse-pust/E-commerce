<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class welcomeController extends Controller
{
    public function index(){
        $sliders = DB::table('sliders')->where('status', 1)->get();
        $testimonials = DB::table('testimonials')->where('status', 1)->get();
        $categories = Category::where('status', 1)->limit(6)->orderBy('en_category_name', 'asc')->get();
        $products= Product::where('status', 1)->latest()->take(4)->get();
        $featured= Product::where(['status' => 1, 'is_featured' => 1])->latest()->take(4)->get();
        $onsale= Product::where(['status' => 1, 'is_onsale' => 1])->latest()->take(4)->get();
        $bestselling= Product::where(['status' => 1, 'is_bestselling' => 1])->latest()->take(4)->get();
        $newarrival= Product::where(['status' => 1, 'is_newarrivals' => 1])->latest()->take(4)->get();
        return view('welcome', compact('sliders', 'testimonials', 'categories','products', 'featured', 'onsale', 'bestselling', 'newarrival'));
    }
}
