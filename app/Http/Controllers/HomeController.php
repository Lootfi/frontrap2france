<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use DB;
use App\Models\Hashtag;

class HomeController extends Controller
{
    public function show(){

    	$popular_hashtags = DB::table('r2f_new_actualités_hashtags')
                      ->join('r2f_new_actualité_hashtag', 'r2f_new_actualités_hashtags.hashtag_id', '=', 'r2f_new_actualité_hashtag.id')
                     ->select(DB::raw('count(*) as repetition, r2f_new_actualité_hashtag.nom'))
                     ->groupBy('r2f_new_actualités_hashtags.hashtag_id')
                     ->orderBy('repetition', 'desc')
                     ->get();

    	return view('pages.home',[

    		'categories' => Category::all(),
    		'articles' => Article::active()->orderBy('created_at','DESC')->get(),
    		'tags' => Hashtag::all(),
    		'popular_hashtags'=>$popular_hashtags
    	]);
    }
}
