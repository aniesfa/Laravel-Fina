<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', 'HomeController');
<<<<<<< HEAD
Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');
Route::get('/about', 'AboutController@about')->name('about');
=======
<<<<<<< HEAD
Route::get('/about', 'AboutController@about')->name('about');
=======
Route::get('/about', 'AboutController@about');
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
Route::get('/article/{id}', 'ArticleController@article');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Home1Controller');
Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/article/tambah','ArticleController@tambah');
Route::post('/article/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete'); 

Route::get('/posts','PostController@index')->name('post');
Route::get('/posts/tambah','PostController@create');
Route::post('/store','PostController@store');
Route::get('/posts/delete/{post}','PostController@destroy');
