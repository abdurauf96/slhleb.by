<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function products(Request $request)
    {
        return view('frontend.products');
    }

    public function viewProduct(Request $request)
    {
        return view('frontend.view-product');
    }
}
