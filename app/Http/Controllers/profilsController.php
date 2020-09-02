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
    public function add(){
        // $users=new user;
        // $users->username="tomiridwan";
        // $users->email="tomiridwan@mail.com";
        // $users->password="454n";
        // $users->save();
     $users=user::find(3);
     $profils= new profil([
         "name"=>"tomy",
         "nik"=>"545121",
         "address"=>"jl.raya haur",
         "no_hp"=>"1211032"
     ]);
     $users->profil()->save($profils);
     return $users;
    }
}
 