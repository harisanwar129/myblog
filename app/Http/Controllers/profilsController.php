<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\profil;
class profilsController extends Controller
{
    public function index(){
       $profils=profil::all();
       $users=user::all();
      return view('profil',compact('profils','users'));
    }
}
 