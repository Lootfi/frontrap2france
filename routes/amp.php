<?php

use Illuminate\Support\Facades\Route; 

/*
|--------------------------------------------------------------------------
| Amp Routes
|--------------------------------------------------------------------------
|
| Here is where you can register amp routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'news' , 'namespace'=> 'News'],function(){

	Route::get('/{tag}','ShowController@show')->name('news.amp.show');

});