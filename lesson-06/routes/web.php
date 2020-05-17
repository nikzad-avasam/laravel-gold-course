<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// except one or more routes from csrf
Route::post('/add-comment',function(Request $Request){
  dd($Request->all());
  echo 'this route dont need csrf and everything is fine';
});

//  test post without sending csrf_token
Route::post('/create/post',function(){
  echo 'your data recived here and post will created soooon';
});
// create form for test csrf_token
Route::get('/show-form',function(){
  return view('csrf_form');
});

Route::get('/', function () {
    return view('welcome');
});
