<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Filter;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function products(Request $request, $id)
    {
        $category=Category::findOrFail($id);
        $filters=Filter::all();
        $products=Product::where('category_id', $id)->get();
        return view('frontend.products', compact('filters', 'products', 'category'));
    }

    public function viewProduct(Request $request)
    {
        return view('frontend.view-product');
    }
}
