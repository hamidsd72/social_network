<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/site', 'HomeController@site')->name('site');
Route::get('/group', 'HomeController@group')->name('group');
Route::get('/follower', 'HomeController@follower')->name('follower');

Route::post('/post/create', 'HomeController@new_post')->name('new_post');
