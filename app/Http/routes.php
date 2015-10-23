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
    return view('welcome');
});


Route::get('/api/users', function () {
    return \App\User::all();
});

Route::get('api/users/{id}', function($id){
	return \App\User::findOrFail($id);
});