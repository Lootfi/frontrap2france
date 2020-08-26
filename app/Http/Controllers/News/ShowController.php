<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Category;
use DB;
use Carbon\Carbon;
use App\Models\Article;
use App\Models\ArticleWeekAnalytic;
use App\Models\ArticleMonthAnalytic;
class ShowController extends Controller
{
    public function show($tag){


        $articles = DB::table('r2f_new_actualite_testing_copy AS articles')
                   ->join('r2f_new_actualite-categorie AS categorie','articles.idcat','=','categorie.id')
                    ->join(DB::raw('r2f_new_adminstrators AS creator FORCE INDEX (PRIMARY)'),'articles.admin_creator_id','=','creator.id')
                    ->select('articles.contenu','articles.created_at','articles.titre','articles.id','articles.tag','articles.status','articles.updated_at','articles.type as Type','categorie.nom as Category','categorie.slug as CategorySlug','creator.full_name as CreatorFullName','creator.slug as CreatorSlug','articles.image')
                   ->where('articles.status',1)
                   ->where('articles.updated_at','<',Carbon::now()->subMinutes(1)->toDateTimeString())
                   ->whereNotIn('articles.tag',[$tag])
                   ->orderBy('articles.created_at','DESC') 
                   ->take(1)
                   ->get();

        $popular_hashtags = DB::table('r2f_new_actualités_hashtags')
                      ->join('r2f_new_actualité_hashtag', 'r2f_new_actualités_hashtags.hashtag_id', '=', 'r2f_new_actualité_hashtag.id')
                     ->select(DB::raw('count(*) as repetition, r2f_new_actualité_hashtag.nom'))
                     ->groupBy('r2f_new_actualité_hashtag.nom')
                     ->orderBy('repetition', 'desc')
                     ->get();


        $socialstatistics = DB::table('r2f_new_social_count')
                            ->select('*')
                            ->limit(1)
                            ->get();

          return $socialstatistics;
    	if($article = Article::fetchByTag($tag)){

    
    		return view('pages.news.show',[

    			'article' => $article,	
    			'categories' => Category::all(),
          'popular_hashtags'=>$popular_hashtags,
          'topWeek' => ArticleWeekAnalytic::OrderBy('views','DESC')->take(4)->get(),
          'topMonth' => ArticleMonthAnalytic::OrderBy('views','DESC')->take(4)->get(),

    		]);
    	}

    	return redirect(Route('home'));
    }

    
}
