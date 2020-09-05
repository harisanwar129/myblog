<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
   protected $table='telepon';
   protected $primaryKey='id';
   protected $guarded=[];
   public function pengguna(){
       return $this->belongsTo('App\pengguna','pengguna_id');
   }
}
