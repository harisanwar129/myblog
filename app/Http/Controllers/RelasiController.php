<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;
use App\telepon;
class RelasiController extends Controller
{
    public function index(){
        $pengguna=pengguna::all();
        $pengguna->telepon->no_telepon;
        var_dump($pengguna);
    }
}
