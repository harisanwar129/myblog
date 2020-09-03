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
}
