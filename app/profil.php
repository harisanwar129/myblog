<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
protected $guarded=[];
    function user(){ 
        return $this->belongsTo('App\user');
    }
}
 