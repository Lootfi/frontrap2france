<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = 'r2f_new_adminstrators';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['Details','StatusName','Avatar'];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password','id','status'];
    /**
    * The attributes that should be cast.
    *
    * @var array
    */
    protected $casts = [
       'created_at' => 'datetime:Y-m-d',
       'updated_at' => 'datetime:Y-m-d',
    ];

    public function getDetailsAttribute(){


        return \App\Models\AdministratorDetail::where('admin_id',$this->id)->first();
    }


    public function getStatusNameAttribute(){

        if($this->status == 1){

            return "Activé";
        }

        if($this->status == 2){

            return "Suspendu";
        }
    }

    public function getAvatarAttribute(){

        $detail = \App\Models\AdministratorDetail::where('admin_id',$this->id)->first();


       if(now()->diffInSeconds($this->updated_at) < 60){

            return "/images/admin/users/avatars/" . $detail->picture; 
       }
       
        return "https://cd1.rap2france.com/public/medias/users/".$this->id."/photoprofil/raw/mdpi/" . $detail->picture; 
    }
    public static function fetchBySlug($slug){

        return self::where('slug',$slug)->first();
    }  

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }   

    public function getAuthPassword() {
    return $this->password;
}  

    public function articles(){

        return $this->hasMany('\App\Models\Article','admin_creator_id','id');
    

    }
}
