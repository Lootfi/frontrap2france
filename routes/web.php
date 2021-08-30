<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@show')->name('home');
Route::get('/search', 'HomeController@search')->name('search');


Route::group(['prefix' => 'news', 'namespace' => 'News'], function () {

	Route::get('/{tag}', 'ShowController@show')->name('news.show');
});

Route::group(['prefix' => 'editors', 'namespace' => 'Editors'], function () {
	Route::get('/{slug}', 'ShowController@show')->name('editors.show');
	Route::get('/', 'ShowController@index')->name('editors.index');
});

Route::group(['prefix' => 'categories', 'namespace' => 'Categories'], function () {

	Route::get('/{slug}', 'ShowController@show')->name('categories.show');
});


Route::get('/termes-et-conditions', 'InformationController@terms')->name('terms_conditions');
Route::get('/confidentialité', 'InformationController@privacy')->name('privacy');
Route::get('/a-propos', 'InformationController@about')->name('about');
Route::get('/contact', 'InformationController@Contact')->name('contact');
