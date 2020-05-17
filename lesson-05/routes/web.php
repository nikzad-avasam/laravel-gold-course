<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;

// TerminableMiddleware test

Route::get('terminate',function(){

  echo 'terminable route here runs.<hr>';

})->middleware('terminable');

// sending params to middleware test
Route::get('check-role',function(){
  echo ' role checking passed by middleware';
})->middleware('check_role:editr');


// how to group middlewares in one key
Route::get('/developer/profile',function(){

})->middleware('company-developers');

Route::group(['middleware'=>'company-developers'],function(){

});
// grouping routes with middleware

Route::middleware([Checkage::class])->group(function(){


    Route::get('/test-group-middleware',function(){
      echo 'hello test group middleware';
    });

    Route::get('/test-2',function(){
      echo 'test 2 is without check age middleware';
    })->withoutMiddleware([CheckAge::class]);



});


// checkage middleware to route

Route::get('checkage',function(){
    echo 'middleware is passed ';
})->middleware(CheckAge::class);

// Route::get('checkage',function(){
//     echo 'middleware is passed ';
// })->middleware('check_age');


Route::get('/', function () {
    return view('welcome');
});
