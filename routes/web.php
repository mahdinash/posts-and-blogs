<?php

use Illuminate\Support\Facades\Route;


Route::view('/','welcome')->name('landing-page');

Route::get('/posts','PostController@index')->name('posts.index'); //show all posts
Route::get('/posts/create','PostController@create')->name('posts.create');
Route::get('/posts/{post}','PostController@show')->name('posts.show');
Route::get('/posts/{post}/edit','PostController@edit')->name('posts.edit');
Route::post('/posts','PostController@store')->name('posts.store');
Route::put('/posts/{post}','PostController@update')->name('posts.update');
Route::delete('/posts/{post}','PostController@destroy')->name('posts.destroy');
