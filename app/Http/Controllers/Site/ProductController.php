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
        $filters=Filter::where('category_id', $id)->get();
        $banners=\App\ProductBanner::all();

        if($filter_id=$request->get('filter')){
            $products=Product::where('category_id', $id)->where('filter_id', $filter_id)->paginate(6);
        }elseif($q=$request->get('q')){
            $products=Product::where('category_id', $id)->whereTranslationLike('name', '%'.$q.'%')->paginate(6);
        }else{
            $products=Product::where('category_id', $id)->paginate(6);
        }
        
        return view('frontend.products', compact('filters', 'products', 'category', 'banners'));
    }

    public function viewProduct(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        $recommends=Product::where('recommend', 1)->get();
        return view('frontend.view-product', compact('product', 'recommends'));
    }
}
