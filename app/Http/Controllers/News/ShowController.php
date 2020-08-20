<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Category;
use DB;
use Carbon\Carbon;
use App\Models\Article;
class ShowController extends Controller
{
    public function show($tag){

        $start = microtime(true);

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

    	if($article = Article::fetchByTag($tag)){

    
    		return view('pages.news.show',[

    			'article' => $article,	
    			'categories' => Category::all(),
                'time' => microtime(true) - $start 

    		]);
    	}

    	return redirect(Route('home'));
    }

    
}
