<?php

namespace App\Http\Controllers\Site;
use App\Recipe;
use App\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $recipes=Recipe::all();
        $new_products=Product::whereStatus('new')->get();
        return view('frontend.welcome', compact('recipes', 'new_products'));
    }
}
