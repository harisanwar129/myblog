<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $guarded=[];
    protected $table="categories";
    protected $primaryKey = 'id';
    public function post(){
        return $this->belongsToMany('App\posts','categories_posts');
    }
    public function user(){
        return $this->belongsToMany('App\user');
    }
}
