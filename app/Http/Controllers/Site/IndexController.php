<?php

namespace App\Http\Controllers\Site;
use App\Recipe;
use App\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appeal;

class IndexController extends Controller
{
    public function index()
    {
        $recipes=Recipe::all();
        $new_products=Product::where('status','new')->get();
        $sliders=\App\Slider::all();
        $bloks=\App\MainBlok::all();
        return view('frontend.welcome', compact('recipes', 'new_products', 'sliders', 'bloks'));
    }

    public function appeal(Request $request)
    {
        $requestData=$request->all();
       
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/appeals', $fayl);
            $requestData['file']=$fayl;
        }
        Appeal::create($requestData);
        return back();
    }
}
