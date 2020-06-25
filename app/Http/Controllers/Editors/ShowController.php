<?php

namespace App\Http\Controllers\Editors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\Category;


class ShowController extends Controller
{
    public function show($slug){

    	if($editor = Administrator::fetchBySlug($slug)){


    		return view('pages.editors.show',[

    			'editor' => $editor,
    			'categories' => Category::all(),
    		]);
    	}

    	return redirect()->back();
    }
}
