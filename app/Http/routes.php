<?php

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

/*Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id};*/

Route::resource('articles', 'ArticlesController');