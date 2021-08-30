<?php

namespace App\Http\Controllers\Editors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\Category;


class ShowController extends Controller
{
	public function show($slug)
	{

		$start = microtime(true);

		if ($editor = Administrator::fetchBySlug($slug)) {


			return view('pages.editors.show', [
				'editor' => $editor,
				'articles' => $editor->articles()->latest()->take(12)->get(),
				'categories' => Category::all(),
				'time' => microtime(true) - $start
			]);
		}

		return redirect()->back();
	}

	public function index()
	{
		return view('pages.editors.index');
	}
}
