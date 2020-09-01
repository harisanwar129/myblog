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
    return $dataprofilclause;
    }
}
