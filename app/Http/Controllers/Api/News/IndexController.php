<?php

namespace App\Http\Controllers\Api\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    public function getMoreNews(Request $request){
    	

    	$article = Article::published()->get()->whereNotIn('tag',request('tags'))->first();
		$article->setAttribute('contenu', html_entity_decode($article->contenu));
    	return $article->toJson();
    }
}
