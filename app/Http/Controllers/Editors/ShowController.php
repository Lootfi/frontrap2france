<?php

namespace App\Http\Controllers\Editors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\ArticleTodayAnalytic;
use App\Models\Category;


class ShowController extends Controller
{
	public function show(Request $request, $slug)
	{

		$start = microtime(true);

		if ($editor = Administrator::fetchBySlug($slug)) {

			$results = $editor->articles()->latest()->paginate(10);
			$articles = '';

			if ($request->ajax()) {
				foreach ($results as $result) {
					$category = $result->Category;
					// $artilces .= '<div class="card mb-2"> <div class="card-body">' . $result->id . ' <h5 class="card-title">' . $result->post_name . '</h5> ' . $result->post_description . '</div></div>';
					$articles .= "<div class=\"col-lg-4 col-md-6\">
					<div class=\"tw3_list clearfix\">
						<a href=\"/news/$result->tag\" class=\"tw3_thumb\">
							<img src=\"$result->Avatar\" loading=\"lazy\" >
						</a>
						<div class=\"tw_3_content\">
							<a href=\"/categories/$category->slug\" class=\"cats reds\">{$category->nom}</a>
							<h3><a href=\"/news/$result->tag\">{$result->titre}</a></h3>
						</div>
					</div>
					
				</div>";
				}
				return $articles;
			}

			return view('pages.editors.show', [
				'editor' => $editor,
				// 'articles' => $editor->articles()->latest()->take(12)->get(),
				'categories' => Category::all(),
				'time' => microtime(true) - $start
			]);
		}

		return redirect()->back();
	}

	public function index()
	{
		$auteurs = Administrator::all();
		return view('pages.editors.index', [
			'authors' => $auteurs,
			'chaud' => ArticleTodayAnalytic::OrderBy('views', 'DESC')->take(4)->get(),
		]);
	}
}
