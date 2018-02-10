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


Route::get('/admin', function () {
    return view('project.index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/create', function () {
    return view('project.create');
});



Route::resource('/project', 'ProjectController' );


Route::get('my-home', 'HomeController@myHome');
Route::get('my-users', 'HomeController@myUsers');
