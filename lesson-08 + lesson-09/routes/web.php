<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

Route::get('/response',function(){
  return response('hello world')->cookie('name','avasam','122222222');
});
Route::get('cookie',function(Request $request){

  $value = $request->cookie('name');
  return $value;
});

Route::post('/upload',function(Request $request){
    $file = $request->file('photo');
    // $file = $request->photo;

    //$file->store('my-files');
    $file->storeAs('my-files','m-new-file.txt');

    //return $file->extension();
    return $file->path();
});

Route::post('register',function(Request $request){
  // $input = $request->only('name','family');
  // return $input;

  // $input = $request->except('age');
  // return $input;

  // if ($request->has(['age','name'])) {
  //     return 'age AND name is exist';
  // }else return 'age is not exist';

  // if ($request->filled('age')) {
  //   return 'age is valid';
  // }else return 'you must enter age';

  // if ($request->missing('age')) {
  //   return 'age is missing';
  // }else {
  //   return 'age have value';
  // }

  echo $request->old('username');

  //$request->flash();
  // $request->flashOnly('username');
  // $request->flashExcept('password');

  return redirect('form')->withInput($request->except('password'));
});

Route::post('/boolean',function(Request $request){
  if($request->boolean('archived')){
    return 'is true';
  }else {
    return 'is false';
  }
});
Route::get('query',function(Request $request){
  // return $request->query('name');
  // return $request->query();

  return $request->name;
});

// JSON format
Route::post('json',function(Request $request){
    //return $request->json()->all();
    return $request->json('name');
});

// method
Route::post('/method-post',function(Request $request){
  // return $request->method();

  $response = '';

  if ($request->isMethod('POST')) {
    $response='yes';
  }else {
    $response='no';
  }

  return $response;
});
Route::get('/method',function(Request $request){
  return $request->method();
});
// get path of request
Route::get('/user/register',function(Request $request){
  // return $request->path();

  // if ($request->is('user/*')) {
  //   echo 'url is user';
  // }else {
  //   echo 'url is not user';
  // }


  // * without query string

  // echo $request->url();

  // * with query String

  // echo $request->fullUrl();



});

// test request inside actions
Route::post('/action/{id}','AdminController@start');


// test request
Route::post('/test-request' , function(Request $request)
{
    // return $request->all();
    //return $request->input('name','nariman');

    // $name = $request->input('products.0.name');
    // $names = $request->input('products.*.name');
    $inputArray = $request->input();
    return $inputArray;

});

Route::get('/', function () {
    return view('welcome');
});
