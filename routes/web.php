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
Route::group(['prefix' => 'news' , 'namespace'=> 'News'],function(){

	Route::get('/{tag}','ShowController@show')->name('news.show');

});


Route::group(['prefix' => 'editors', 'namespace' => 'Editors'],function(){


	Route::get('/{slug}','ShowController@show')->name('editors.show');
});

Route::group(['prefix' => 'categories','namespace' => 'Categories'],function(){

	Route::get('/{slug}','ShowController@show')->name('categories.show');

});