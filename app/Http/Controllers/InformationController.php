<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class InformationController extends Controller
{
    public function terms(){
                $start = microtime(true);

    	return view('pages.informations.terms', 
    		[

    		'categories' => Category::all(),
            'time' => microtime(true) - $start


    		]);

    }

    public function privacy(){
        $start = microtime(true);

    	return view('pages.informations.privacy',[

    		'categories' => Category::all(),
             'time' => microtime(true) - $start

    	]);
    }

    public function about(){
        $start = microtime(true);

    	return view('pages.informations.about',[

    		'categories' => Category::all(),
           'time' => microtime(true) - $start

    	]);
    }
}
