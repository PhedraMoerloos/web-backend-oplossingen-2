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


// Authentication routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');



Route::get('/', 'ArticlesController@index');
Route::get('/articles', 'ArticlesController@index');
Route::get('comments', 'CommentsController@index');

Route::get('comments/{id_article}', 'CommentsController@showComments');
Route::get('articles/hide/{id}' , 'ArticlesController@hideArticle');

//\create moet boven de {id} want anders gaat hij hier altijd naartoe, aangezien \iets triggert die functie, dus ook "\create"
Route::get('articles/create', 'ArticlesController@createArticle');
Route::get('articles/{id}', 'ArticlesController@showArticle');
//{id} --> alles dat na de \ komt, id is gwn naam die we hieraan geven --> wat na \ komt wordt dan opgeslagen in id


//gaan een post met info (create form) sturen naar collectie $articles met alle articles in
Route::post('articles', 'ArticlesController@storeArticle');
Route::post('comments', 'CommentsController@storeComment');
