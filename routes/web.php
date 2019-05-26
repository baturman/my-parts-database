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

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'BackendController@dashboard')->name('backend.dashboard');
    Route::get('categories', 'BackendController@categories')->name('backend.categories');
});

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('find', 'WelcomeController@find')->name('find');
Route::get('browse', 'WelcomeController@browse')->name('browse');
Route::get('browse/sub-category/{slug}', 'WelcomeController@subcategory')->name('subcategory');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('parts/create', 'PartController@create')->name('part.create');
Route::post('parts', 'PartController@store')->name('part.store');

Route::get('subcategory/create', 'CategoryController@create')->name('subcategory.create');
Route::post('subcategories', 'CategoryController@store')->name('subcategory.store');

/* AJAX ROUTES */

Route::group(['prefix' => 'ajax'], function(){
    Route::resource('category', 'Ajax\CategoriesAjaxController')->except(['create', 'edit']);
    Route::get('category/migrate/{source}/{target}', 'Ajax\CategoriesAjaxController@migrate');

    Route::resource('subcategory', 'Ajax\SubcategoryAjaxController')->except(['create', 'edit']);
    Route::get('subcategory/migrate/{source}/{target}', 'Ajax\SubcategoryAjaxController@migrate');
});
