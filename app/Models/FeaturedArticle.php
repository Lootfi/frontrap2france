<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class FeaturedArticle extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'r2f_new_article_featured';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    public static function featuredPosts(){

    	return self::where('date_start','<=',Carbon::now())->where('date_end','>=',Carbon::now());
    	
    }

    public function article(){

    	return $this->hasOne('\App\Models\Article','id','article_id');
    }
}
