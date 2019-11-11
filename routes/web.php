<?php

// Home Page
Route::get('/', 'AuthController@home');
Route::get('/home', 'AuthController@home');

// Login and Logout
Route::get('/login', ['middleware' => 'guest', 'uses' => 'AuthController@getLogin']);
Route::post('/login', ['middleware' => 'guest', 'uses' => 'AuthController@postLogin']);
Route::get('/logout', ['middleware' => 'auth', 'uses' => 'AuthController@logout']);

// Registration and User Profile
Route::resource('user', 'UserController', ['except' => ['index', 'show', 'destroy']]);

Route::resource('page', 'PageController', ['middleware' => 'auth']);
Route::any('page/{id}/edit', 'PageController@edit');
Route::resource('page/update', 'PageController', ['middleware' => 'auth']);
