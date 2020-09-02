<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
  
   public function profil(){
       return $this->hasOne('app\profil');
   }
}
