<?php

use Illuminate\Support\Facades\Route;

/*
*
* this is laravel GOLD tutorial from https://avasam.ir
*
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/foo',function(){
  return 'hello this foo url from my laravel';
});
Route::get('/user','UserController@index');

// types of routes

// Route::get($uri , $callback);
// Route::post($uri , $callback);
// Route::put($uri , $callback);
// Route::patch($uri , $callback);
// Route::delete($uri , $callback);
// Route::options($uri , $callback);
Route::match(['get','post'],'/reg',function(){
  return 'post and get route in one route';
});
Route::any('/reg2',function(){
  return 'any route test';
});
Route::get('/commentform',function(){
  return view('comment-form');
});
Route::post('addcomment',function(){
  return 'add comment working';
});


//  Redirect for routes
Route::get('/step1',function(){

});
Route::redirect('/step1','/step2');
Route::get('/step2',function(){
  return 'yes redirect is working and here is step2';
});
Route::redirect('/step2','/step3');
Route::get('/step3',function(){
  return 'STEP 3 IS WORKING';
});

Route::view('/welcome','welcome');
Route::view('/welcome2','welcome',['name'=>'nikzad']);


//  send parameter to route in Laravel
// Route::get('/user/{id}',function($id){
//   return "user id is ".$id;
// });
Route::get('/post/{id}/comments/{comment}',function($id,$comment){
  return "post is : ".$id." comment id is :".$comment;
});
// Optitional parameters for routes
Route::get('/book/{name?}',function($name=null){
  return $name;
});

//  Regular Expression
Route::get('/computer/{name}',function($name){
    return $name;
})->where('name','[A-Za-z]+');
Route::get('/computer2/{id}',function($id){
    return $id;
})->where('id','[0-9]+');
Route::get('/computer3/{id}/{name}',function($id,$name){
    return $id." - ".$name;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

Route::get('/patterntest/{user_id}',function($user_id){
  return $user_id;
});
Route::get('/slashtest/{word}',function($word){
  return $word;
})->where('word','.*');

//  naming route
// Route::get('user/{user_id}/product/{product_id}/comment/{comment_id}/like/{like_id}',function(){
//
// })->name('product.like');
Route::get('user/profile',function(){
  return 'user.profile name is working';
})->name('user.profile');

Route::get('/customer/{id}/profile/{photo}',function($id,$photo){
  return $id.' - '.$photo;
})->name('customer.profile');
