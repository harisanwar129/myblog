<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
 protected $fillable = ['id', 'title', 'body', 'user_id'];
protected $table="posts";
  public function user(){
      return $this->belongsTo('App\user');
  }
  public function profil(){
      return $this->belongsTo('App\profil');
  }
public function category(){
    return $this->belongsToMany('App\Category','categories_posts');
}
}
