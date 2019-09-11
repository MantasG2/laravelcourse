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


use http\Env\Response;

Route::get('/', function () {
    return view('home');
});
Route::get('aiksteles', function (){
    return view('search',['meta_title'=>'Aikštelių paieška param']);
});
Route::get('apie', function(){
    return view('about',['meta_title'=>'Apie param']);
});
Route::get('kontaktai', function(){
    return view('contact',['meta_title'=>'Kaontaktai param']);
});
Route::get('page', function(){
    return view('page',['title'=>'dar kažkas id taip toliau']);
});
Route::get('json', function(){
    return \Response::json(['category' => 'cars', 'item' => 'toyota-prius']);
});
Route::get('download/{file}', function($file){
    return \Response::download($file);
});
Route::get('bl', function(){
    return redirect('kontaktai');
});

