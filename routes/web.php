<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/test', function()
// {
// 	return Share::load('http://www.example.com', 'Link description')->services();
// });

Route::group(['namespace'=>'Site'], function(){
    
    Route::get('/', 'IndexController@index')->name('home');
    
    Route::get('/company', 'PageController@company')->name('company'); //done+
    Route::get('/company-today', 'PageController@companyToday')->name('companyToday'); // done++
    Route::get('/company-history', 'PageController@companyHistory')->name('companyHistory'); // done ++
    Route::get('/company-activities', 'PageController@companyActivities')->name('companyActivities'); //done ++
    Route::get('/company-news', 'PageController@companyNews')->name('companyNews'); //done ++
    Route::get('/news/{id}', 'PageController@viewNews')->name('viewNews'); //done ++

    Route::get('/cooperation', 'PageController@cooperation')->name('cooperation'); //done ++
    Route::get('/interesting', 'PageController@interesting')->name('interesting'); //done ++

    Route::get('/recipes', 'PageController@companyRecipes')->name('recipes'); //done ++
    Route::get('/recipe/{id}', 'PageController@viewRecipe')->name('viewRecipe'); //done ++

    Route::get('/stories', 'PageController@companyStories')->name('stories'); //done ++
    Route::get('/story/{id}', 'PageController@viewStory')->name('viewStory'); //done ++

    Route::get('/about-city', 'PageController@aboutCity')->name('aboutCity'); //done ++
    Route::get('/slutsk/{key}', 'PageController@aboutView')->name('aboutView'); //done ++

    Route::get('/holiday-scripts', 'PageController@holidayScripts')->name('holidayScripts'); //done ++
    Route::get('/holiday-scripts/{id}', 'PageController@viewHolidayScript')->name('viewHolidayScript'); //done++
    
    Route::get('/stock-competitions', 'PageController@stockCompetitions')->name('stockCompetitions'); //done ++
    Route::get('/stock/{id}', 'PageController@viewStock')->name('viewStock'); //done ++
    Route::get('/competition/{id}', 'PageController@viewCompetition')->name('viewCompetition'); //done ++

    Route::get('/contact', 'PageController@contact')->name('contact'); //done++
    Route::get('/feedback', 'PageController@feedback')->name('feedback'); //done ++
    Route::get('/requisites', 'PageController@requisites')->name('requisites'); //done ++
    Route::get('/schema', 'PageController@schema')->name('schema'); //done ++
    Route::get('/stores', 'PageController@stores')->name('stores'); //done ++
    Route::get('/appeals', 'PageController@appeals')->name('appeals'); //done ++
    Route::get('/privacy-policy', 'PageController@privacyPolicy'); //done ++
    Route::get('/search', 'PageController@search');
    Route::get('/site-map', 'PageController@siteMap'); //done ++
    Route::get('/page/{key}', 'PageController@page')->name('page'); //done+
    Route::get('/products/{id}', 'ProductController@products')->name('products');
    Route::get('/product/{id}', 'ProductController@viewProduct')->name('viewProduct');

    //sending messages
    Route::post('/appeal', 'IndexController@appeal')->name('appeal');
    Route::post('/send-recipe', 'IndexController@sendRecipe')->name('sendRecipe');
    Route::post('/send-story', 'IndexController@sendStory')->name('sendStory');
    Route::post('/order-product', 'IndexController@orderProduct')->name('orderProduct');
   

});



Route::get('/lang/{locale}', function ($locale) {
    session(['locale'=>$locale]);
    return back();
});







Auth::routes();
//routes for admin panel
Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/admin/dashboard', 'HomeController@index')->name('home');
    Route::get('admin', 'Admin\AdminController@index');
    Route::resource('admin/roles', 'Admin\RolesController');
    Route::resource('admin/permissions', 'Admin\PermissionsController');
    Route::resource('admin/users', 'Admin\UsersController');
    Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
        'index', 'show', 'destroy'
    ]);
    Route::resource('admin/settings', 'Admin\SettingsController');
    Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

    Route::resource('admin/categories', 'Admin\\CategoriesController');
    Route::resource('admin/filters', 'Admin\\FiltersController');
    
    //routes for products
    Route::post('ckeditor/image_upload', 'Admin\PostsController@uploadImage')->name('upload');
    Route::resource('admin/products', 'Admin\\ProductsController');
    Route::post('/admin/products/{id}/attribute', 'Admin\ProductsController@saveAttributes')->name('saveAttributes');
    Route::post('/admin/products/attribute/{id}/update', 'Admin\ProductsController@updateAttributes')->name('updateAttributes');
    Route::post('/admin/products/delete-attribute', 'Admin\ProductsController@deleteAttribute')->name('deleteProductAttribute');
    //Route::post('/admin/upload-images', 'Admin\ProductsController@uploadImages')->name('uploadImages');
    Route::get('/admin/photo/{id}/delete', 'Admin\ProductsController@deleteProductPhoto')->name('deleteProductPhoto');
    Route::post('/admin/getfilters', 'Admin\ProductsController@getfilters');

    Route::resource('admin/requisites', 'Admin\\RequisitesController');
    Route::resource('admin/appeals', 'Admin\\AppealsController');
    Route::resource('admin/contacts', 'Admin\\ContactsController');
    Route::resource('admin/personals', 'Admin\\PersonalsController');
    Route::resource('admin/pages', 'Admin\\PagesController');
    Route::resource('admin/features', 'Admin\\FeaturesController');
    Route::resource('admin/stores', 'Admin\\StoresController');
    Route::resource('admin/sertificats', 'Admin\\SertificatsController');
    Route::resource('admin/histories', 'Admin\\HistoriesController');
    Route::resource('admin/activities', 'Admin\\ActivitiesController');
    Route::resource('admin/posts', 'Admin\\PostsController');
    Route::resource('admin/recipes', 'Admin\\RecipesController');
    Route::resource('admin/tags', 'Admin\\TagsController');
    //routes for Meal steps
    Route::post('admin/recipes/add-step', 'Admin\\RecipesController@saveStep')->name('saveStep');
    Route::post('admin/recipes/update-step', 'Admin\\RecipesController@updateStep')->name('updateStep');
    Route::post('admin/recipes/delete-step', 'Admin\\RecipesController@deleteStep')->name('deleteStep');

    Route::resource('admin/story-categories', 'Admin\\StoryCategoriesController');
    Route::resource('admin/stories', 'Admin\\StoriesController');
    Route::resource('admin/about-cities', 'Admin\\AboutCitiesController');
    Route::resource('admin/scripts', 'Admin\\ScriptsController');
    Route::resource('admin/holidays', 'Admin\\HolidaysController');
    Route::resource('admin/stocks', 'Admin\\StocksController');

    Route::get('admin/competitions', 'Admin\\StocksController@competitions');
    Route::get('admin/competitions/{id}/add-participant', 'Admin\\StocksController@addParticipant');
    Route::post('admin/competitions/{id}/add-participant', 'Admin\\StocksController@saveParticipant')->name('saveParticipant');
    Route::post('admin/competitions/{id}/save-participant', 'Admin\\StocksController@updateParticipant')->name('updateParticipant');

    Route::get('admin/competitions/participants', 'Admin\\StocksController@participants');
    Route::post('/admin/participants/delete', 'Admin\\StocksController@participantDelete');


    Route::resource('admin/menus', 'Admin\\MenusController');
    Route::resource('admin/product-banners', 'Admin\\ProductBannersController');
    Route::resource('admin/sliders', 'Admin\\SlidersController');
    Route::resource('admin/main-bloks', 'Admin\\MainBloksController');
    Route::resource('admin/recipes-from-users', 'Admin\\RecipesFromUsersController');
    Route::resource('admin/stories-from-users', 'Admin\\StoriesFromUsersController');
    Route::resource('admin/order-products', 'Admin\\OrderProductsController');
    Route::resource('admin/home-banners', 'Admin\\HomeBannersController');


});

Route::get('logout', 'Auth\LoginController@logout');

