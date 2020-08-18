<?php

namespace App\Http\Controllers\Api\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class IndexController extends Controller
{
        public function getMoreNews(Request $request){

        		$category = Category::fetchBySlug($request->category);
        		$articles =  $category->articles()->get()->slice($request->dataTotal)->take(12);
        		$articles->map(function($item,$index){
        			$item->setAttribute('DateActu',$item->DateActu);
        			$item->setAttribute('Avatar',$item->Avatar);
                                $item->setAttribute('ArticleViews',$item->ArticleViews);
        		});

        		if($articles->count() == 0){

        			return response()->json("No articles");
        		}
        		return $articles;
        }

        public function getCategorie($slug){



                $category = Category::where('slug',$slug)->first();

                $articles = DB::table('r2f_new_actualite_testing_copy AS articles')
                            ->join('r2f_new_actualite-categorie AS categorie','articles.idcat','=','categorie.id')
                            ->join('r2f_new_adminstrators AS creator','articles.admin_creator_id','=','creator.id')
                            ->select('articles.id','articles.titre','articles.image','articles.updated_at','articles.tag','articles.created_at','articles.status','categorie.nom as Category','creator.full_name as CreatorFullName','creator.email as CreatorEmail', 'articles.type')
                             ->where('idcat',$category->id)
                             ->orderBy('articles.created_at','DESC')
                                ->take(4)
                                ->get();

      $articles->map(function($item,$index){

        if(now()->diffInSeconds($item->updated_at) < 60){

            $item->image =  "/images/admin/articles/avatars/". $item->image; 

       }else{

            $item->image = "https://cd1.rap2france.com/public/medias/news/".$item->id."/660x330/mdpi/".$item->image ;

       }
}

                return $articles;
        }
}
