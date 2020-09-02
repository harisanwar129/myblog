<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class usersController extends Controller
{
    public function index(){
        //relasi dari user
        $datausers=DB::table('users')
                   ->join('profils','users.id','=','profils.user_id')
                   ->get();
        //relasi dari profils           
        $dataprofils=DB::table('profils')
                   ->join('users','users.id','=','profils.user_id')
                   ->get();

        $dataprofilclause=DB::table('profils')
                    ->join('users',function($join){
                    $join->on('users.id','=','profils.user_id')
                    ->where('profils.alamat','cipendawa');
                    })
                    ->where('user_id',1)
                    ->get();           
    return $datausers;
    }
public function insert(){
    // data users
    $datausers=[
        "username"=>"agus",
        "email"=>"agus@mai.com",
        "password"=>"113456"
    ];
    //insert ke users
    $userdata=DB::table('users')
            ->insert($datausers);

    //menampilkan id terakhir
    $latest=DB::table('users')
            ->latest()
            ->orderBy('id','DESC')
            ->first(); 

// dataprofils
     $dataprofils=[
                "alamat"=>"golibah rarahan",
                "tempat_lahir"=>"cipanas",
                "waktu_lahir"=>"1998-02-24",
                "user_id"=>$latest->id
            ];
            // insert data PRofils
            $profilsdata=DB::table('profils')
                ->insert($dataprofils);              
            return redirect('users');
}
    
  
}
