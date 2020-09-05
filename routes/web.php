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

Route::get('/users','profilsController@index');
Route::get('/add','profilsController@add');
Route::get('/update','profilsController@update');
Route::get('/delete','profilsController@delete');
Route::get('/postsbyusers/{id}','profilsController@posts');
Route::get('/allposts','postsController@index');
Route::get('/addpost','postsController@add');
Route::get('/updatepost','postsController@update');
Route::get('/deletepost','postsController@delete');
Route::get('/postbycategory','postsController@postbycategory');
Route::get('/categorypost','postsController@categorypost');
Route::get('/insertpostscategories','postsController@insertpostscategories');