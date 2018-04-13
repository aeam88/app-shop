<?php


Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/products/create', 'ProductController@create');
Route::post('/admin/products', 'ProductController@store');
Route::get('/admin/products/{id}/edit', 'ProductController@edit');
Route::post('/admin/products/{id}/edit', 'ProductController@update');
Route::delete('/admin/products/{id}', 'ProductController@destroy');