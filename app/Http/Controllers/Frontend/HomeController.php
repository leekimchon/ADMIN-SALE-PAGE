<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $sliders = Slider::all();
        $categories = Category::all();
        
        // dd($categories[0]->products);
        $products = Product::all();
        $params = [
            'sliders' => $sliders,
            'categories' => $categories,
            'products' => $products,
        ];
        return view('frontend.home', $params);
    }
}
