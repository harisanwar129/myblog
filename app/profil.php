<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{

    function user(){ 
        return $this->belongsTo('App\user');
    }
}
 