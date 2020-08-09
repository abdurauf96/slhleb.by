<?php

namespace App\Http\Controllers\Site;
use App\Recipe;
use App\Product;
use App\Page;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appeal;

class IndexController extends Controller
{
   
    public function index()
    {
        $recipes=Recipe::all();
        $banners=\App\HomeBanner::all();
        $sliders=\App\Slider::all();
        $bloks=\App\MainBlok::all();
        return view('frontend.welcome', compact('recipes', 'banners', 'sliders', 'bloks'));
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

    public function sendRecipe(Request $request)
    {
        $requestData=$request->all();
       
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/users/recipes', $fayl);
            $requestData['file']=$fayl;
        }
        \App\RecipesFromUser::create($requestData);
        return back();
    }

    public function sendStory(Request $request)
    {
        $requestData=$request->all();
       
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/users/stories', $fayl);
            $requestData['file']=$fayl;
        }
        \App\StoriesFromUser::create($requestData);
        return back();
    }

    public function orderProduct(Request $request)
    {
        $requestData=$request->all();

        \App\OrderProduct::create($requestData);
        return back();
    }
}
