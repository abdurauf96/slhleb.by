<?php

namespace App\Http\Controllers\Site;
use App\Recipe;
use App\Page;
use App\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function company(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        return view('frontend.company', compact('page'));
    }

    public function companyToday(Request $request)
    {
        $features=\App\Feature::all();
        $page=Page::where('key', $request->path())->first();
        return view('frontend.company-today', compact('page', 'features'));
    }

    public function companyHistory(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        $sertificats=\App\Sertificat::all();
        $years=\App\History::all();
        return view('frontend.company-history', compact('page', 'sertificats', 'years'));
    }

    public function companyActivities(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        $activities=\App\Activity::all();
        return view('frontend.company-activities', compact('page', 'activities'));
    }

    public function companyNews(Request $request)
    {
        if($year=$request->get('year')){
            
            $posts=\App\Post::whereYear('created_at', $year)->paginate(5);
            
        }else{
            $posts=\App\Post::whereYear('created_at', date('Y'))->paginate(5);
        }
        $page=Page::where('key', $request->path())->first();
        
        return view('frontend.company-news', compact('posts', 'page'));
    }

    public function viewNews($id)
    {
        $post=\App\Post::findOrFail($id);
        $posts=\App\Post::all();
        return view('frontend.view-news', compact('post', 'posts'));
    }

    public function interesting(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        return view('frontend.interesting', compact('page'));
    }

    

    public function companyRecipes(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        $tags=\App\Tag::all();
        if($tag=$request->get('tag')){
            $recipes=Recipe::where('tag_id', $tag)->paginate(6);
        }else{
            $recipes=Recipe::paginate(6);
        }
       
        
        return view('frontend.company-recipes', compact('recipes', 'page', 'tags'));
    }

    public function viewRecipe($id)
    {
        $recipe=Recipe::with('steps')->findOrFail($id);
        
        return view('frontend.view-recipe', compact('recipe'));
    }

    public function companyStories(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        $categories=\App\StoryCategory::all();
        if($cat_id=$request->get('category_id')){
            $stories=\App\Story::where('category_id', $cat_id)->paginate(6);
        }else{
            $stories=\App\Story::paginate(6);
        }
        
        return view('frontend.company-stories', compact('page', 'categories', 'stories'));
    }

    public function viewStory($id)
    {
        $story=\App\Story::findOrFail($id);
        return view('frontend.view-story', compact('story'));
    }

    public function aboutCity(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        return view('frontend.about-city', compact('page'));
    }

    public function aboutView($key)
    {
        $page=\App\AboutCity::where('key', $key)->first();
        return view('frontend.about-view', compact('page'));
    }

    public function holidayScripts(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        $scripts=\App\Script::all();
        if($script=$request->get('script')){
            $holidays=\App\Holiday::where('script_id', $script)->paginate(6);
        }else{
            $holidays=\App\Holiday::paginate(6);
        }
        return view('frontend.holiday-scripts', compact('page', 'scripts', 'holidays'));
    }

    public function viewHolidayScript($id)
    {
        $holiday=\App\Holiday::findOrFail($id);
        return view('frontend.view-holiday-scripts', compact('holiday'));
    }

    public function stockCompetitions(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        $stocks=\App\Stock::paginate(6);
        return view('frontend.stock-competitions', compact('page', 'stocks'));
    }

    public function viewStock($id)
    {
        $stock=\App\Stock::findOrFail($id);

        return view('frontend.view-stock', compact('stock'));
    }

    public function viewCompetition($id)
    {
        $competition=\App\Stock::findOrFail($id);
        return view('frontend.view-competition', compact('competition'));
    }

    public function contact(Request $request)
    {
        
        $contact=\App\Contact::first();
        $personals=\App\Personal::all();
        return view('frontend.contact',compact('personals', 'contact'));
    }

    public function feedback(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        return view('frontend.feedback', compact('page'));
    }

    public function requisites(Request $request)
    {
        $req=\App\Requisite::first();
        return view('frontend.requisites', compact('req'));
    }

    public function schema(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        return view('frontend.schema');
    }

    public function stores(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        $stores=\App\Store::all();
        return view('frontend.stores',compact('page', 'stores'));
    }

    public function appeals(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        return view('frontend.appeals', compact('page'));
    }

    public function search(Request $request)
    {
        return view('frontend.search');
    }

    public function privacyPolicy(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        
        return view('frontend.privacy-policy', compact('page'));
    }

    public function siteMap()
    {
        $menus=\App\Menu::whereNull('parent_id')->get();
        $products=\App\Product::all();

        return view('frontend.site-map', compact('menus', 'products'));
    }

   
}
