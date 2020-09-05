<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
   protected $table='pengguna';
   protected $primaryKey='id';
   protected $guarded=[];
   public function telepon(){
       return $this->hasOne('App\telepon','id','pengguna_id');
   }
}
