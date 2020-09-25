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

Route::group(['namespace'=>'Site'], function(){
    
    Route::get('/', 'IndexController@index')->name('home');
    
    Route::get('/company', 'PageController@company')->name('company'); //done+
    Route::get('/company/today', 'PageController@companyToday')->name('companyToday'); // done++
    Route::get('/company/history', 'PageController@companyHistory')->name('companyHistory'); // done ++
    Route::get('/company/activities', 'PageController@companyActivities')->name('companyActivities'); //done ++
    Route::get('/company/videos', 'PageController@companyVideos')->name('companyVideos'); //done ++
    Route::get('/company/news', 'PageController@companyNews')->name('companyNews'); //done ++
    Route::get('/company/news/year/{year}', 'PageController@companyNews')->name('companyNewsYear'); //done ++
    Route::get('/company/news/{slug?}', 'PageController@viewNews')->name('viewNews'); //done ++

    Route::get('/cooperation', 'PageController@cooperation')->name('cooperation'); //done ++
    Route::get('/interesno', 'PageController@interesting')->name('interesting'); //done ++

    Route::get('/interesno/recipes', 'PageController@companyRecipes')->name('recipes'); //done ++
    Route::get('/interesno/recipes/tag/{slug}', 'PageController@companyRecipes'); //done ++
    Route::get('/interesno/recipe/{slug?}', 'PageController@viewRecipe')->name('viewRecipe'); //done ++

    Route::get('/interesno/stories', 'PageController@companyStories')->name('stories'); //done ++
    Route::get('/interesno/stories/category/{slug}', 'PageController@companyStories'); //done ++
    Route::get('/interesno/story/{slug?}', 'PageController@viewStory')->name('viewStory'); //done ++

    Route::get('/interesno/o-gorode-slutsk', 'PageController@aboutCity')->name('aboutCity'); //done ++
    Route::get('/interesno/o-gorode-slutsk/{key}', 'PageController@aboutView')->name('aboutView'); //done ++

    Route::get('/interesno/holiday-scripts', 'PageController@holidayScripts')->name('holidayScripts'); //done ++
    Route::get('/interesno/holiday-scripts/category/{slug}', 'PageController@holidayScripts'); //done ++
    Route::get('/interesno/holiday-script/{slug?}', 'PageController@viewHolidayScript')->name('viewHolidayScript'); //done++
    
    Route::get('/interesno/stock-competitions', 'PageController@stockCompetitions')->name('stockCompetitions'); //done ++
    Route::get('/interesno/stock-competitions/stock/{slug?}', 'PageController@viewStock')->name('viewStock'); //done ++
    Route::get('/interesno/stock-competitions/competition/{slug?}', 'PageController@viewCompetition')->name('viewCompetition'); //done ++

    Route::get('/contact/contact-details', 'PageController@contact')->name('contact'); //done++
    Route::get('/contact/feedback', 'PageController@feedback')->name('feedback'); //done ++
    Route::get('/contact/requisites', 'PageController@requisites')->name('requisites'); //done ++
    Route::get('/contact/schema', 'PageController@schema')->name('schema'); //done ++
    Route::get('/contact/stores', 'PageController@stores')->name('stores'); //done ++
    Route::get('/contact/appeals', 'PageController@appeals')->name('appeals'); //done ++
    Route::get('/privacy-policy', 'PageController@privacyPolicy'); //done ++
    Route::get('/search', 'PageController@search');
    Route::get('/site-map', 'PageController@siteMap'); //done ++
    
    Route::get('/company/{page}', 'PageController@companyPage')->name('companyPage'); //done+
    Route::get('/cooperation/{page}', 'PageController@cooperationPage')->name('contactPage'); //done+
    Route::get('/contact/{page}', 'PageController@contactPage')->name('interesnoPage'); //done+
    Route::get('/interesno/{page}', 'PageController@interesnoPage')->name('cooperationPage'); //done+
    

    Route::get('/products/{slug?}', 'ProductController@products')->name('products');
    Route::get('/products/{slug?}/filter/{filter_slug}', 'ProductController@products');
    Route::get('/product/{cate}/{slug?}', 'ProductController@viewProduct')->name('viewProduct');

    //sending messages
    Route::post('/appeal', 'IndexController@appeal')->name('appeal');
    Route::post('/send-recipe', 'IndexController@sendRecipe')->name('sendRecipe');
    Route::post('/send-story', 'IndexController@sendStory')->name('sendStory');
    Route::post('/order-product', 'IndexController@orderProduct')->name('orderProduct');
    Route::post('/call-back', 'IndexController@callBack')->name('callBack');
    
    Route::post('/getQuizProducts', 'IndexController@getQuizProducts');
   

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
    Route::get('/admin/product/{id}/delete/{key}', 'Admin\ProductsController@deletePhotoByKey');
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
    Route::get('admin/check_slug', 'Admin\\RecipesController@check_slug');

});

Route::get('logout', 'Auth\LoginController@logout');


Route::resource('admin/quiz-categories', 'Admin\\QuizCategoriesController');
Route::resource('admin/quiz-products', 'Admin\\QuizProductsController');
Route::resource('admin/videos', 'Admin\\VideosController');