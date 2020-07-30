<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.home-menu', function($view){
            $menus=\App\Menu::whereNull('parent_id')->get();
            $view->with(compact('menus'));
        });
        view()->composer('layouts.menu-wrapper', function($view){
            $menus=\App\Menu::whereNull('parent_id')->get();
            $view->with(compact('menus'));
        });
        view()->composer('components.breadcrumb', function($view){
            $url='/'.\Request::path();
            $child=\App\Menu::whereUrl($url)->first();
            $view->with(compact('child'));
        });
        view()->composer('layouts.product-menu', function($view){
            $categories=\App\Category::all();
            $view->with(compact('categories'));
        });
    }
}
