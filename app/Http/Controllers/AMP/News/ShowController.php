<?php

namespace App\Http\Controllers\AMP\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
class ShowController extends Controller
{
    public function show($tag){


    	if($article = Article::fetchByTag($tag)){
    		
    		$article->setAttribute('contenu', html_entity_decode($article->ContenuFormat['contenu'], ENT_QUOTES, 'UTF-8'));
    		return view('pages.amp.news.show',[

    			'article' => $article,	
    			'categories' => Category::all(),

    		]);
    	}

    	return redirect(Route('home'));
    }
}
