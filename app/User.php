<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
  protected $guarded=[];
  protected $table="users";
   public function profil(){
       return $this->hasOne('App\profil');
   }
   public function post(){
       return $this->hasMany('App\posts');
   }
   public function category(){
       return $this->hasMany('App\Category');
   }
}
