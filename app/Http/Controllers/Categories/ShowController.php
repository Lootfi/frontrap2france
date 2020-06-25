<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ShowController extends Controller
{
    public function show($slug){

    	if($category = Category::fetchBySlug($slug)){

    		return view('pages.categories.show',[

    			'categories' => Category::all(),
    			'category' => $category,

    		]);
    	}

    	return redirect()->back();
    }
}
