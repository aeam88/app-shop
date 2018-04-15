<?php


Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
   	Route::get('/products', 'ProductController@index');
	Route::get('/products/create', 'ProductController@create');
	Route::post('/products', 'ProductController@store');
	Route::get('/products/{id}/edit', 'ProductController@edit');
	Route::post('/products/{id}/edit', 'ProductController@update');
	Route::delete('/products/{id}', 'ProductController@destroy'); 
});