<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\profil;
use App\posts;
use App\Category;
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
    public function update(){
        $users=user::find(2);
        $users->username="uchiha haris";    
        $users->save();
        $databaru=[
            "title"=>"uchiha",
            "body"=>"uchiha clan elit"
        ];    
        $users->post()->where('id',3)
            ->update($databaru);
            return redirect('allposts');
    }
    public function delete(){
        $users=user::findOrfail(2);
        $users->post()->where('id',3)->delete();
        return redirect('allposts');
    }
    public function postbycategory(){
            $categories=Category::all();
            
            return view('postbycategory',compact('categories'));
    }
    public function categorypost(){
            $posts=posts::all();
            
           foreach ($posts as $key){
              var_dump( $key->category()->name);
             
           }
           
    }
    public function insertpostscategories(){
               $users=user::find(2);
               $dataposts=["title"=>"ini hasil dari insert",
                           "body"=>"ini hasil dari insert"    
                                        ];
               $datacategoris=["name"=>"ini hasil dari insert"];
               $users->post()->create($dataposts)->category()->create($datacategoris);
               return redirect('allpost');                         
           }

}
 