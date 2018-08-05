<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    return view('welcome');

    if(Auth::check()){
        return "user " .ucFirst(Auth::user()->name). " is logged in!";
    } else {
        return redirect('/home');
    }

//    $username = 'xxx';
//    $password = '123';
//
//    if(Auth::attempt(['username' => $username,'password' => $password])){
//        return redirect()->intended('/admin');
//    }
});

Route::resource('/posts', 'PostController');

Route::auth();

Route::get('/home', 'HomeController@index');
