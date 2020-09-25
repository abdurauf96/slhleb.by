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
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // $ip=$_SERVER['REMOTE_ADDR'];
        // $users=\App\Ip::all();
        // $num=1;
        // foreach($users as $user){
        //     if ($ip==$user->ip) {
        //       $num++;
        //     }
        // }
        // if ($num==1) {
        //     \App\Ip::create(['ip'=>$ip]);
        //     $content=" <script>  setTimeout(function(){
        //         $('.cookies').slideDown();
        //       },5000); </script>";
        //       echo $content;
        // }
        
        view()->composer('layouts.home-menu', function($view){
            $menus=\App\Menu::whereNull('parent_id')->get();
            $view->with(compact('menus'));
        });
        view()->composer('layouts.menu-wrapper', function($view){
            $menus=\App\Menu::whereNull('parent_id')->get();
            $view->with(compact('menus'));
        });
        
        view()->composer('layouts.product-menu', function($view){
            $categories=\App\Category::all();
            $view->with(compact('categories'));
        });
        
        view()->composer('layouts.modals', function($view){
            $categories=\App\QuizCategory::all();
            $view->with(compact('categories'));
        });
    }
}
