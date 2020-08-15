<?php

namespace App\Http\Controllers\Api\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
    public function getMoreNews(Request $request){
    	

    	$article = Article::published()->latest()->get()->whereNotIn('tag',request('tags'))->first();
        if($article->type == 1){

            $article->setAttribute('contenu', html_entity_decode($article->ContenuFormat['contenu'] , ENT_QUOTES, 'UTF-8'));

        }else{

            $article->setAttribute('contenu', html_entity_decode($article->contenu , ENT_QUOTES, 'UTF-8'));
        }
		
		$article->setAttribute('DateActu',$article->DateActu);
        $article->setAttribute('Avatar',$article->Avatar);
        $article->setAttribute('Creator',$article->Creator);
        $article->setAttribute('Category',$article->Category);
        $article->setAttribute('ArticleViews',$article->ArticleViews);


    	return $article->toJson();
    }
}
