<?php

namespace App\Http\Controllers\Api\Editors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrator;

class IndexController extends Controller
{
	public function getMoreNews(Request $request)
	{
		$editor = Administrator::fetchBySlug($request->editor);
		return $editor->articles()->take(12)->get();
		$articles =  $editor->articles()->get();

		$articles->map(function ($item, $index) {
			$item->setAttribute('DateActu', $item->DateActu);
			$item->setAttribute('Avatar', $item->Avatar);
			$item->setAttribute('Category', $item->Category);
		});

		return $articles;
	}
}
