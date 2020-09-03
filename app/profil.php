<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
protected $guarded=[];
protected $table="profils";
   public function user(){ 
        return $this->belongsTo('App\user');
    }
   public function post(){ 
        return $this->belongsTo('App\posts');
    }
}
 