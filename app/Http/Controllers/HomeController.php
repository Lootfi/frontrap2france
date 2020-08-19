<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use DB;
use App\Models\Hashtag;
use App\Models\FeaturedArticle;
use App\Models\ArticleMonthAnalytic;
use App\Models\ArticleLastMonthAnalytic;
use App\Models\ArticleTodayAnalytic;
use App\Models\ArticleYesterdayAnalytic;
use App\Models\ArticleWeekAnalytic;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function redirectToHome(){

        return redirect(Route('home')); 
    }

    public function show(){   


    $start = microtime(true);
    	$popular_hashtags = DB::table('r2f_new_actualités_hashtags')
                      ->join('r2f_new_actualité_hashtag', 'r2f_new_actualités_hashtags.hashtag_id', '=', 'r2f_new_actualité_hashtag.id')
                     ->select(DB::raw('count(*) as repetition, r2f_new_actualité_hashtag.nom'))
                     ->groupBy('r2f_new_actualité_hashtag.nom')
                     ->orderBy('repetition', 'desc')
                     ->get();

         $featuredPosts = FeaturedArticle::featuredPosts()->get()->filter(function($item,$index){

             return $item->article->status == 1;

         });

         $featuredPosts->map(function($item,$index){

            $item = $item->article;
         });
        
        if(($count = (6 - $featuredPosts->count())) > 0) {

           $featuredarticle = Article::published()->latest()->where('alaune',"1")->take($count)->get();
            
            foreach($featuredarticle as $article){

                $featuredPosts->push($article);
            }        
        } 

         $articles = Article::published()->latest()->take(5)->get();

         $time = microtime(true) - $start;
    	return view('pages.home',[

    		'categories' => Category::all(),
    		'articles' => $articles,
            'featuredArticles' => $featuredPosts,
    		'tags' => Hashtag::all(),
    		'popular_hashtags'=>$popular_hashtags,
            'topToday' => ArticleTodayAnalytic::OrderBy('views','DESC')->take(4)->get(),
            'topYesterday' => ArticleYesterdayAnalytic::OrderBy('views','DESC')->take(4)->get(),
            'topWeek' => ArticleWeekAnalytic::OrderBy('views','DESC')->take(4)->get(),
            'topMonth' => ArticleMonthAnalytic::OrderBy('views','DESC')->take(4)->get(),
            'topLastMonth' => ArticleLastMonthAnalytic::OrderBy('views','DESC')->take(4)->get(),
            'time' => $time,
    	]);
    }

    public function search(){

        return view('pages.search',[

            'categories' => Category::all(),
        ]);
    }
}
