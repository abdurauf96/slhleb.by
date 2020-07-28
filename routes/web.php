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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lang/{locale}', function ($locale) {
    session(['locale'=>$locale]);
    return back();
});

Auth::routes();

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
    
    Route::post('ckeditor/image_upload', 'Admin\PostsController@uploadImage')->name('upload');
    Route::resource('admin/products', 'Admin\\ProductsController');
    Route::post('/admin/products/{id}/attribute', 'Admin\ProductsController@saveAttributes')->name('saveAttributes');
    Route::post('/admin/products/attribute/{id}/update', 'Admin\ProductsController@updateAttributes')->name('updateAttributes');
    Route::post('/admin/products/delete-attribute', 'Admin\ProductsController@deleteAttribute')->name('deleteProductAttribute');
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
    Route::post('admin/recipes/add-step', 'Admin\\RecipesController@updateStep')->name('updateStep');
    Route::post('admin/recipes/delete-step', 'Admin\\RecipesController@deleteStep')->name('deleteStep');

    Route::resource('admin/story-categories', 'Admin\\StoryCategoriesController');
    Route::resource('admin/stories', 'Admin\\StoriesController');
    Route::resource('admin/about-cities', 'Admin\\AboutCitiesController');
    Route::resource('admin/scripts', 'Admin\\ScriptsController');
    Route::resource('admin/holidays', 'Admin\\HolidaysController');
    Route::resource('admin/stocks', 'Admin\\StocksController');
    Route::get('admin/competitions', 'Admin\\StocksController@competitions');
    Route::get('admin/competitions/{id}/add-participant', 'Admin\\StocksController@addParticipant');
    Route::post('admin/competitions/{id}/add-participant', 'Admin\\StocksController@saveParticipant');
    Route::get('admin/competitions/participants', 'Admin\\StocksController@participants');
    Route::post('/admin/participants/delete', 'Admin\\StocksController@participantDelete');


});

Route::get('logout', 'Auth\LoginController@logout');
