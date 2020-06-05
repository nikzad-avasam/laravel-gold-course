<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome',
    [
      'name'=>'avasam',
      'age'=>25,
      'mark'=>19,
      'foods'=>['pizza','humbrger','abgoosht','ghormesabzi','gheyme','kabab','jooje']

  ]);
});
Route::get('/page2',function(){
  return view('page2');
});
Route::get('/page3',function(){
  return view('page3');
});
