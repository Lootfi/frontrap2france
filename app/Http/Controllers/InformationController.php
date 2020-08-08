<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class InformationController extends Controller
{
    public function terms(){

    	return view('pages.informations.terms',
    		[

    		'categories' => Category::all(),

    		]);

    }

    public function privacy(){

    	return view('pages.informations.privacy',[

    		'categories' => Category::all(),
    	]);
    }

    public function about(){

    	return view('pages.informations.about',[

    		'categories' => Category::all(),
    	]);
    }
}
