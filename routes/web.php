<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil',function(){
    echo 'nama saya haris';
});

Route::get('/daftar-teman',function(){
    return view('daftar-teman');
});

Route::get('/family/{name}/{umur?}',function($name,$umur=null){
    return  "nama saya " .$name. " berumur "  .$umur;
});