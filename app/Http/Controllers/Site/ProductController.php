<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Filter;
use MetaTag;


use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        // Defaults
        MetaTag::set('description', '');
        MetaTag::set('title', '');
    }
    
    
    public function products(Request $request, $slug, $filter_slug=null)
    {
        $category=Category::where('slug', $slug)->first();
        MetaTag::set('title',$category->meta_title);
        MetaTag::set('description',$category->meta_description);

        $filters=Filter::where('category_id', $category->id)->get();
        $banners=\App\ProductBanner::all();
        
        if(!empty($request->filter_slug)){
           
            $filter=Filter::where('slug', $request->filter_slug)->first();
           
            $products=Product::where('category_id', $category->id)->where('filter_id', $filter->id)->paginate(6);
        }elseif($q=$request->get('q')){
            $products=Product::where('category_id', $category->id)->whereTranslationLike('name', '%'.$q.'%')->paginate(6);
        }else{
            $products=Product::where('category_id', $category->id)->paginate(6);
        }
        
        return view('frontend.products', compact('filters', 'products', 'category', 'banners'));
    }

    public function viewProduct(Request $request, $slug)
    {
        $product=Product::where('slug', $slug)->first();
        MetaTag::set('title',$product->meta_title);
        MetaTag::set('description',$product->meta_description);
        
        $ids=[];
        foreach ($product->recommends as $rec) {
            array_push($ids, $rec->recommend_product_id);
        }
        $rec_products=Product::whereIn('id', $ids)->get();
       

        return view('frontend.view-product', compact('product', 'rec_products'));
    }
}
