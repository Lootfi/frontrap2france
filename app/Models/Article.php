<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Laravel\Scout\Searchable;

class Article extends Model
{
        use Searchable;

        
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'r2f_new_actualite_testing_copy';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['contenutext','contenuJson','id','idcat','admin_creator_id'];
    /**
    * The attributes that should be cast.
    *
    * @var array
    */
    protected $casts = [
       'created_at' => 'datetime:Y-m-d',
       'updated_at' => 'datetime:Y-m-d',
       'dateactu' =>'datetime:Y-m-d',
       'contenuJson' => 'array'
    ];
    

    public function getArtistsAttribute(){

        return $this->artists()->orderBy('rank')->get();
    }

    public function getIsFeaturedAttribute(){

        if($featured = \App\Models\FeaturedArticle::where('article_id',$this->id)->first()){

            return ['article' => $this, 'date_start' => $featured->date_start, 'date_end' => $featured->date_end];

        }else{

            return null;

        }
    }

    public static function published(){

        return self::where('status',1)->where('updated_at','<',Carbon::now()->subMinutes(1)->toDateTimeString());
    }


    public function getDateActuAttribute(){

        return Carbon::parse($this->created_at)->isoFormat('MMM Do YY');
    }


    public function getCreatorAttribute(){


    	return \App\Models\Administrator::findOrFail($this->admin_creator_id);
    }

    public function getCategoryAttribute(){

        return \App\Models\Category::findOrFail($this->idcat);
    }
    
    public function getAvatarAttribute(){


        if(now()->diffInSeconds($this->updated_at) < 60){

                    return "/images/admin/articles/avatars/". $this->image; 
               }

        return "https://cd1.rap2france.com/public/medias/news/".$this->id."/660x330/mdpi/".$this->image;

    }

    public function getAvatar($width,$height){

         if(now()->diffInSeconds($this->updated_at) < 60){

                            return "/images/admin/articles/avatars/". $this->image; 
                       }

        return "https://cd1.rap2france.com/public/medias/news/".$this->id."/".$width."x".$height."/mdpi/".$this->image;
    }
    public function getContenuFormatAttribute(){

        if($this->type == 1 ){

            return ['type' => "raw", 'contenu' => $this->FormattedContent($this)];
       
        }else{

            return ['type' => "json" , 'contenu' => $this->contenuJSON];
        }
    }

    

    public function getHashtagsAttribute(){

        return $this->hashtags()->get();

    }

    public static function fetchByTag($tag){

        return self::where('tag',$tag)->first();
    }


    public function artists()

    {

        return $this->belongsToMany(\App\Models\Artist::class, 'r2f_new_article_artist')
                    ->withPivot('rank');

    }

    public function hashtags()

    {

        return $this->belongsToMany(\App\Models\Hashtag::class, 'r2f_new_actualités_hashtags');

    }
      public function FormattedContent($article){

        $article->contenu = html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8');

        $imageIds = [];
        preg_match_all('#(<p>)?\s*(<div[^>]*data-img-buddy[^>]*>[^>]*<\/div>)\s*(<\/p>)?#mx', $article->contenu, $ImageAttributes);
        $attributes = [];
        foreach($ImageAttributes[0] as $key => $Image) {


                preg_match_all('#data-img-buddy-(.*)\s*=\s*"(.*)"#isxmU', $Image, $Resultattributes);

                    array_push($attributes,$Resultattributes);
                }

            $images = [];

            foreach($attributes as $attribute){

                preg_match('/data-img-buddy-id="([^"]+)"/',$attribute[0][0],$m);

                $articleImage = \App\Models\ImageArticle::findOrFail($m[1]);
                $imgUrl = "https://img.rap2france.com/public/medias/news/image/".$m[1]."/raw/mdpi/".$articleImage->image;
                $imageHtml =  "<img src=\"".$imgUrl."\" width=\"100%\" alt=\"".$article->titre."\" style=\"margin-bottom:15px;\"/>";

                array_push($images, $imageHtml);
            
            }

            foreach($images as $key => $image){
                $article->contenu = str_replace($ImageAttributes[0][$key], $image, $article->contenu);

            }

            preg_match_all('#<div[^>]*data-html-snippet[^>]*>[^>]*</div>#mxiU', $article->contenu, $Embeds);
            $embedsArray = [];
            foreach($Embeds[0] as $key => $embed){
                preg_match_all('#data-html-snippet-(.*)\s*=\s*"(.*)"#isxmU', $embed, $resultSnippet);
            array_push($embedsArray, $resultSnippet);
            } 

            $embedIframes = [];
            foreach($embedsArray as $embedEl){

                $embed =  base64_decode($embedEl[2][0]);
                $embed = html_entity_decode($embed, ENT_QUOTES, 'UTF-8');
                $embed = sprintf('<div class="my-4 mx-auto "  data-html-snippet="true">%s</div>', $embed);
                array_push($embedIframes,$embed);

            }
            foreach($embedIframes as $key => $iframe){

            $article->contenu = str_replace($Embeds[0][$key], $iframe, $article->contenu);


            }

            return $article->contenu;



    }
}
