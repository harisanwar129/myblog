<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
  protected $guarded=[];
protected $table="posts";
  public function user(){
      return $this->belongsTo('App\user');
  }
  public function profil(){
      return $this->belongsTo('App\profil');
  }
}
