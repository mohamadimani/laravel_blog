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


Route::get('/', 'indexController@index')->name('index');

// Route::get('/posts', 'postController@index')->name('posts.index');
// Route::get('/posts/create', 'postController@create')->name('posts.create');
// Route::get('/posts/{post}/edit', 'postController@edit')->name('posts.edit');
// Route::post('/posts', 'postController@store')->name('posts.store');
// Route::get('/posts/{post}', 'postController@show')->name('posts.show');
// Route::put('/posts/{post}', 'postController@update')->name('posts.update');
// Route::delete('/posts/{post}', 'postController@destroy')->name('posts.destroy');

Route::resource('posts', 'postController'); // Route::resource('posts', 'postController')->except(['index' , 'show']);  => all route without inde and show // Route::resource('posts', 'postController')->only(['index' , 'show']);   => just inde and show
