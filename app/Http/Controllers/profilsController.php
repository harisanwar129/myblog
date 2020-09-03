<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\profil;
use App\posts;
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
    public function update(){
        $users=user::find(3);
        $datausers=[
            "username"=>"sarudud",
            "email"=>"sarudud@mail.com",
            "password"=>md5('udud')
        ];
        $dataprofils=[
            "name"=>"udud",
            "nik"=>"131"
        ];
        $users->update($datausers);
        $users->profil()->update($dataprofils);
        return $users;

    }
    public function delete(){
        $users=user::find(6);
        $users->delete();
        return $users;
    }
    public function posts(Request $req){
        $datausersposts=user::find($req->id);
        return view('detail',compact('datausersposts'));
    }
}
 