<?php

namespace App\Http\Controllers\Api\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Analytics;
use App\Models\Administrator;
use App\Models\Article;
use DB;
use Carbon\Carbon;
use Spatie\Analytics\Period;


class IndexController extends Controller
{
    public function getMoreNews(Request $request)
    {


        // $article = Article::published()->latest()->get()->whereNotIn('tag',request('tags'))->first();
        /* if($article->type == 1){

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

*/
        $articles = DB::table('r2f_new_actualite_testing_copy AS articles')
            ->join('r2f_new_actualite-categorie AS categorie', 'articles.idcat', '=', 'categorie.id')
            ->join(DB::raw('r2f_new_adminstrators AS creator FORCE INDEX (PRIMARY)'), 'articles.admin_creator_id', '=', 'creator.id')
            ->select('articles.contenu', 'articles.created_at', 'articles.titre', 'articles.id', 'articles.tag', 'articles.status', 'articles.updated_at', 'articles.type as Type', 'categorie.nom as Category', 'categorie.slug as CategorySlug', 'creator.full_name as CreatorFullName', 'creator.slug as CreatorSlug', 'articles.image')
            ->where('articles.status', 1)
            ->where('articles.updated_at', '<', Carbon::now()->subMinutes(1)->toDateTimeString())
            ->whereNotIn('articles.tag', request('tags'))
            ->orderBy('articles.created_at', 'DESC')
            ->take(1)
            ->get();

        foreach ($articles as $article) {
            if ($article->Type == 1) {

                $article->contenu = html_entity_decode(FormattedContent($article), ENT_QUOTES, 'UTF-8');
            } else {

                $article->contenu = html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8');
            }

            if (now()->diffInSeconds($article->updated_at) < 60) {

                $article->Avatar =  "/images/admin/articles/avatars/" . $article->image;
            } else {

                $article->Avatar = "https://cd1.rap2france.com/public/medias/news/" . $article->id . "/660x330/mdpi/" . $article->image;
            }

            $article->created_at = Carbon::parse($article->created_at)->isoFormat('MMM Do YY');
            $article->CreatorAvatar = Administrator::where('slug', $article->CreatorSlug)->first()->Avatar;
        }

        return $articles->toJson();
    }
}
