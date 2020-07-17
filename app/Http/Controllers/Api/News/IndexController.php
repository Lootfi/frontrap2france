<?php

namespace App\Http\Controllers\Api\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    public function getMoreNews(Request $request){
    	

    	$article = Article::published()->latest()->get()->whereNotIn('tag',request('tags'))->first();
		$article->setAttribute('contenu', $article->ContenuFormat['contenu']);
		$article->setAttribute('DateActu',$article->DateActu);
        $article->setAttribute('Avatar',$article->Avatar);
        $article->setAttribute('Creator',$article->Creator);
        $article->setAttribute('Category',$article->Category);

    	return $article->toJson();
    }
}
