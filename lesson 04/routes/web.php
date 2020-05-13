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
// Route::get('/name','ExampleController@index');
Route::get('/avasam/user/login',function(){
  $route = Route::current();
  $name = Route::currentRouteName();
  $action = Route::currentRouteAction();


  echo $route->uri;

})->name('avasam');


Route::fallback(function () {
    //
    return view('404_page');
});

// Model routes
Route::get('api/users/{user}', function (App\User $user) {
    return $user->email;
});


// prefix for routes
Route::prefix('profile')->group(function () {

    Route::get('user/account', function () {
        // Matches The "/profile/user/account" URL
        return 'this is user/account route . working...';
    });
    Route::get('us/bb',function(){
      return 'hello us/bb';
    });
});
// nameprefix for routes
Route::name('name.')->group(function () {

    Route::get('nameprefix', function () {
        // Route assigned name "admin.users"...
    })->name('prefix');

    Route::get('/test111111', function () {
        // Route assigned name "admin.users"...
    })->name('test0');

});


// Subdomain in routes
Route::domain('{account}.127.0.0.1:8000')->group(function () {

    Route::get('/', function ($account) {
        //

        echo $account;
    });

});

// namespace routes
Route::namespace('Profile')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/name','InfoController@getname');
});

// Middleware Routes

Route::middleware(['auth','first'])->group(function () {

    Route::get('/user/dashboard', function () {
        // Uses first & second Middleware
    });

    Route::get('user/add/comment', function () {
        // Uses first & second Middleware
    });

    Route::get('user/add/like/post', function () {
        // Uses first & second Middleware
    });

    Route::get('user/tickets', function () {
        // Uses first & second Middleware
    });

});


Route::get('/', function () {
    return view('welcome');
});
