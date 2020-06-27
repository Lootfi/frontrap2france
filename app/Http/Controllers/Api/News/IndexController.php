<?php

namespace App\Http\Controllers\Api\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    public function getMoreNews(Request $request){
    	

    	$articles = Article::published()->get()->whereNotIn('tag',request('tags'))->take(1);

    	return $articles;
    }
}
