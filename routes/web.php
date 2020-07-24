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

Route::group(['middleware'=>['auth', 'roles'], 'roles'=>'admin'], function(){
    
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
    
});

Route::get('logout', 'Auth\LoginController@logout');


Route::resource('admin/products', 'Admin\\ProductsController');
Route::post('/admin/products/{id}/attribute', 'Admin\ProductsController@saveAttributes')->name('saveAttributes');
Route::post('/admin/products/attribute/{id}/update', 'Admin\ProductsController@updateAttributes')->name('updateAttributes');
Route::post('/admin/products/delete-attribute', 'Admin\ProductsController@deleteAttribute')->name('deleteProductAttribute');