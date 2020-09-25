<?php

namespace App\Http\Controllers\Site;
use App\Recipe;
use App\Product;
use App\Page;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appeal;
use Illuminate\Support\Facades\Mail;
use MetaTag;
class IndexController extends Controller
{
   
    public function index()
    {

        $recipes=Recipe::whereStatus(1)->get();
        $banners=\App\HomeBanner::all();
        $sliders=\App\Slider::all();
        $bloks=\App\MainBlok::all();
         MetaTag::set('title','Слуцкий хлебозавод');
        MetaTag::set('description','Главная страница ');
        return view('frontend.welcome', compact('recipes', 'banners', 'sliders', 'bloks'));
    }

    public function appeal(Request $request)
    {
        
        
        $data = array(
            'type' => $request->type ?? null,
            'name' => $request->name ?? null,
            'addres' => $request->addres ?? null,
            'email' => $request->email ?? null,
            'msg' => $request->msg ?? null,
            'file' => $request->file ?? null
        );
       
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/appeals', $fayl);
            $data['file']=$fayl;
        }
        Appeal::create($data);
        
        
     Mail::to('375336062768@ya.ru')->send(new \App\Mail\Appeal($data));
        return back()->with('sended','success');

    }
    
    public function callBack(Request $request)
    {
        $data=$request->all();
        
        if ($request->hasFile('file')) {
            $file=$request->file('file');
            
            $fayl=time().$file->getClientOriginalName();
            $file->move('files/appeals', $fayl);
            $data['file']=$fayl;
        }
        Appeal::create($data);
        
     Mail::to('375336062768@ya.ru')->send(new \App\Mail\CallBack($data));
        return back()->with('sended','success');

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
        $data=$request->all();

        \App\OrderProduct::create($data);
        
        
        Mail::to('375336062768@ya.ru')->send(new \App\Mail\Order($data));
        return back()->with('sended','success');
        
        return back();
    }
    
    public function getQuizProducts(Request $request)
    {
        
        $products=\App\QuizProduct::whereIn('quiz_category_id', $request->ids)->get();
        return view('components.quiz-slider', compact('products'));
    }
}
