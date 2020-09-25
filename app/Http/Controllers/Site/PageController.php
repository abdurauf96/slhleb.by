<?php

namespace App\Http\Controllers\Site;
use App\Recipe;
use App\Page;
use App\Menu;
use MetaTag;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    
    public function __construct()
    {
        // Defaults
        MetaTag::set('description', '');
        MetaTag::set('title', '');
    }

    public function companyPage(Request $request)
    {
        $page=Page::where('key', $request->page)->first();
        $menu=Menu::where('url', '/company/'.$request->page)->first();

        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        
        return view('frontend.page', compact('page', 'menu'));
    }

    public function cooperationPage(Request $request)
    {
        $page=Page::where('key', $request->page)->first();
        
        $menu=Menu::where('url', '/cooperation/'.$request->page)->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        return view('frontend.page', compact('page', 'menu'));
    }

    public function interesnoPage(Request $request)
    {
        $page=Page::where('key', $request->page)->first();
        $menu=Menu::where('url', '/interesno/'.$request->page)->first();

        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        
        return view('frontend.page', compact('page', 'menu'));
    }
    public function contactPage(Request $request)
    {
        $page=Page::where('key', $request->page)->first();
        $menu=Menu::where('url', '/contact/'.$request->page)->first();

        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        
        return view('frontend.page', compact('page', 'menu'));
    }


    public function company(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        
        $menu=Menu::where('url', '/'.$request->path())->first();
        return view('frontend.company', compact('page', 'menu'));
    }

    public function companyToday(Request $request)
    {
        $features=\App\Feature::all();
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        return view('frontend.company-today', compact('page', 'features'));
    }

    public function companyHistory(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $sertificats=\App\Sertificat::orderBy('id','desc')->get();
        $years=\App\History::all();
        return view('frontend.company-history', compact('page', 'sertificats', 'years'));
    }

    public function companyActivities(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $activities=\App\Activity::paginate(10);
        return view('frontend.company-activities', compact('page', 'activities'));
    }
    
    public function companyVideos(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $videos=\App\Video::paginate(6);
        
        return view('frontend.company-videos', compact('page', 'videos'));
    }

    public function companyNews(Request $request)
    {
        if(!empty($year=$request->year)){
            
            $posts=\App\Post::whereYear('date', $year)->orderBy('date', 'desc')->paginate(5);
            
        }else{
            $posts=\App\Post::orderBy('date', 'desc')->paginate(5);
        }
        $page=Page::where('key', 'company/news')->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        
        return view('frontend.company-news', compact('posts', 'page'));
    }

    public function viewNews($slug)
    {
        $post=\App\Post::where('slug',$slug)->first();
        
        MetaTag::set('title',$post->meta_title);
        MetaTag::set('description',$post->meta_description);
        
        $posts=\App\Post::orderBy('date', 'desc')->get();
        return view('frontend.view-news', compact('post', 'posts'));
    }

    public function interesting(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $menu=Menu::where('url', '/'.$request->path())->first();
        return view('frontend.interesting', compact('page', 'menu'));
    }

    public function cooperation(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        
        return view('frontend.cooperation', compact('page'));
    }

    public function companyRecipes(Request $request)
    {
        $page=Page::where('key', 'interesno/recipes')->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $tags=\App\Tag::all();

        if(!empty($request->slug)){
            $tag=\App\Tag::where('slug', $request->slug)->first();
            $recipes=Recipe::where('tag_id', $tag->id)->paginate(6);
        }else{
            $recipes=Recipe::paginate(6);
        }
       
        
        return view('frontend.company-recipes', compact('recipes', 'page', 'tags'));
    }

    public function viewRecipe($slug)
    {
        $recipe=Recipe::with('steps')->where('slug', $slug)->first();
        MetaTag::set('title',$recipe->meta_title);
        MetaTag::set('description',$recipe->meta_description);
        
        return view('frontend.view-recipe', compact('recipe'));
    }

    public function companyStories(Request $request)
    {
      
        $page=Page::where('key', 'interesno/stories')->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $categories=\App\StoryCategory::all();

        if(!empty($request->slug)){
            $category=\App\StoryCategory::where('slug', $request->slug)->first();
            $stories=\App\Story::where('category_id', $category->id)->paginate(6);
        }else{
            $stories=\App\Story::paginate(6);
        }
        
        return view('frontend.company-stories', compact('page', 'categories', 'stories'));
    }

    public function viewStory($slug)
    {
        $story=\App\Story::where('slug',$slug)->first();
        MetaTag::set('title',$story->meta_title);
        MetaTag::set('description',$story->meta_description);
        return view('frontend.view-story', compact('story'));
    }

    public function aboutCity(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $bloks=\App\AboutCity::all();
        return view('frontend.about-city', compact('page', 'bloks'));
    }

    public function aboutView($key)
    {
        $page=\App\AboutCity::where('key', $key)->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        return view('frontend.about-view', compact('page'));
    }

    public function holidayScripts(Request $request)
    {
        $page=Page::where('key', 'interesno/holiday-scripts')->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $scripts=\App\Script::all();

        if(!empty($request->slug)){
            $script=\App\Script::where('slug', $request->slug)->first();
            $holidays=\App\Holiday::where('script_id', $script->id)->paginate(6);
        }else{
            $holidays=\App\Holiday::paginate(6);
        }
        return view('frontend.holiday-scripts', compact('page', 'scripts', 'holidays'));
    }

    public function viewHolidayScript($slug)
    {
        $holiday=\App\Holiday::where('slug', $slug)->first();
        return view('frontend.view-holiday-scripts', compact('holiday'));
    }

    public function stockCompetitions(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $stocks=\App\Stock::paginate(6);
        
        return view('frontend.stock-competitions', compact('page', 'stocks'));
    }

    public function viewStock($slug)
    {
        $stock=\App\Stock::where('slug', $slug)->first();
        MetaTag::set('title',$stock->meta_title);
        MetaTag::set('description',$stock->meta_description);
        return view('frontend.view-stock', compact('stock'));
    }

    public function viewCompetition($slug)
    {
        $competition=\App\Stock::where('slug', $slug)->first();
        MetaTag::set('title',$competition->meta_title);
        MetaTag::set('description',$competition->meta_description);
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
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
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
        MetaTag::set('title','Схема проезда');
        MetaTag::set('description','Схема проезда');
        return view('frontend.schema');
    }

    public function stores(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        $stores=\App\Store::all();
        return view('frontend.stores',compact('page', 'stores'));
    }

    public function appeals(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        return view('frontend.appeals', compact('page'));
    }

    public function search(Request $request)
    {
        $q=$request->q;

        $products=\App\Product::whereTranslationLike('name', '%'.$q.'%')
        ->orWhereTranslationLike('description', '%'.$q.'%')
        ->orWhereTranslationLike('about', '%'.$q.'%')
        ->orWhereTranslationLike('consist', '%'.$q.'%')
        ->get();

        $posts=\App\Post::where('title_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('title_by', 'LIKE', '%'.$q.'%')
        ->orWhere('title_en', 'LIKE', '%'.$q.'%')
        ->orWhere('body_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('body_by', 'LIKE', '%'.$q.'%')
        ->orWhere('body_en', 'LIKE', '%'.$q.'%')
        ->get();

        $recipes=\App\Recipe::where('name_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('name_by', 'LIKE', '%'.$q.'%')
        ->orWhere('name_en', 'LIKE', '%'.$q.'%')
        ->orWhere('consist_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('consist_by', 'LIKE', '%'.$q.'%')
        ->orWhere('consist_en', 'LIKE', '%'.$q.'%')
        ->get();

        $stories=\App\Story::where('title_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('title_by', 'LIKE', '%'.$q.'%')
        ->orWhere('title_en', 'LIKE', '%'.$q.'%')
        ->orWhere('body_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('body_by', 'LIKE', '%'.$q.'%')
        ->orWhere('body_en', 'LIKE', '%'.$q.'%')
        ->get();
        
        $holidays=\App\Holiday::where('title_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('title_by', 'LIKE', '%'.$q.'%')
        ->orWhere('title_en', 'LIKE', '%'.$q.'%')
        ->orWhere('body_ru', 'LIKE', '%'.$q.'%')
        ->orWhere('body_by', 'LIKE', '%'.$q.'%')
        ->orWhere('body_en', 'LIKE', '%'.$q.'%')
        ->get();

        return view('frontend.search', compact('q','products', 'posts', 'recipes', 'stories','holidays'));
    }

    public function privacyPolicy(Request $request)
    {
        $page=Page::where('key', $request->path())->first();
        MetaTag::set('title',$page->meta_title);
        MetaTag::set('description',$page->meta_description);
        
        return view('frontend.privacy-policy', compact('page'));
    }

    public function siteMap()
    {
        $menus=\App\Menu::whereNull('parent_id')->get();
        $products=\App\Product::all();

        return view('frontend.site-map', compact('menus', 'products'));
    }

    public function test()
    {
        $menus=\App\Menu::whereNull('parent_id')->get();
        $products=\App\Product::all();

        return view('frontend.site-map', compact('menus', 'products'));
    }

   
}
