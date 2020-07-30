<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function company(Request $request)
    {
        return view('frontend.company');
    }

    public function companyToday(Request $request)
    {
        return view('frontend.company-today');
    }

    public function companyHistory(Request $request)
    {
        return view('frontend.company-history');
    }

    public function companyNews(Request $request)
    {
        return view('frontend.company-news');
    }

    public function viewNews($id)
    {
        return view('frontend.view-news');
    }

    public function interesting()
    {
        return view('frontend.interesting');
    }

    public function companyActivities(Request $request)
    {
        return view('frontend.company-activities');
    }

    public function companyRecipes(Request $request)
    {
        return view('frontend.company-recipes');
    }

    public function viewRecipe($id)
    {
        return view('frontend.view-recipe');
    }

    public function companyStories(Request $request)
    {
        return view('frontend.company-stories');
    }

    public function viewStory($id)
    {
        return view('frontend.view-story');
    }

    public function aboutCity(Request $request)
    {
        return view('frontend.about-city');
    }

    public function aboutView($key)
    {
        return view('frontend.about-view');
    }

    public function holidayScripts(Request $request)
    {
        return view('frontend.holiday-scripts');
    }

    public function viewHolidayScript(Request $request)
    {
        return view('frontend.view-holiday-scripts');
    }

    public function stockCompetitions(Request $request)
    {
        return view('frontend.stock-competitions');
    }

    public function viewStock($id)
    {
        return view('frontend.view-stock');
    }

    public function viewCompetition($id)
    {
        return view('frontend.view-competition');
    }

    public function contact(Request $request)
    {
        return view('frontend.contact');
    }

    public function feedback(Request $request)
    {
        return view('frontend.feedback');
    }

    public function requisites(Request $request)
    {
        return view('frontend.requisites');
    }

    public function schema(Request $request)
    {
        return view('frontend.schema');
    }

    public function stores(Request $request)
    {
        return view('frontend.stores');
    }

    public function appeals(Request $request)
    {
        return view('frontend.appeals');
    }

    public function search(Request $request)
    {
        return view('frontend.search');
    }

    public function privacyPolicy(Request $request)
    {
        return view('frontend.privacy-policy');
    }

    public function siteMap()
    {
        return view('frontend.site-map');
    }

   
}
