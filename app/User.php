<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
  protected $guarded=[];
   public function profil(){
       return $this->hasOne('app\profil');
   }
}
