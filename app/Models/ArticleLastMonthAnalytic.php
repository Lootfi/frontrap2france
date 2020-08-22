<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleLastMonthAnalytic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */ 
    protected $table = 'r2f_new_actualite_analytics_last_month';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function article(){

        return $this->hasOne('\App\Models\Article','id','actualite_id');
    }
}
