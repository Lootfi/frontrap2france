<?php

namespace App\Http\Controllers\Api\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
        public function getMoreNews(Request $request){

        		$category = Category::fetchBySlug($request->category);
        		$articles =  $category->articles()->get()->slice($request->dataTotal)->take(12);
        		$articles->map(function($item,$index){

        			$item->setAttribute('DateActu',$item->DateActu);
        			$item->setAttribute('Avatar',$item->Avatar);
        		});

        		return $articles;
        }
}
