<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\profil;
use App\posts;
class postsController extends Controller
{
    public function index(){
        $postsusers=posts::all();
        return view('postsusers',compact('postsusers'));
    }
    public function add(){
        $users=new user;
        $users->username="yudi";
        $users->email="yudi@mail.com";
        $users->password=md5("454n");
        $users->save();
        $users->post()->create([
            "title"=>"belajar vue js",
            "body"=>"belajar vue js untuk pemula",

        ]);
    
        return redirect('users');
    }
}
