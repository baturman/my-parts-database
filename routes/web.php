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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('dashboard', 'HomeController@dashboard')->name('backend.dashboard');
Route::get('categories', 'BackendController@categories')->name('backend.categories');
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
});
