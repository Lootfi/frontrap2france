<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Category;
use DB;

use App\Models\Article;
class ShowController extends Controller
{
    public function show($tag){

        $start = microtime(true);


    	if($article = Article::fetchByTag($tag)){
    		
            $article = DB::table('r2f_new_actualite_testing_copy AS articles')->select('*')
                       ->where('articles.tag',$tag)
                       ->get();

            return $article;

            return Article::fetchByTag($tag);

    		return view('pages.news.show',[

    			'article' => $article,	
    			'categories' => Category::all(),
                'time' => microtime(true) - $start

    		]);
    	}

    	return redirect(Route('home'));
    }

    
}
