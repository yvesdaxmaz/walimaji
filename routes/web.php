<?php

Route::get('/', 'WelcomeController@index');

Auth::routes();
Route::get('/register', 'Admin\UserTypeController@index')->name('register2');;

Route::get('/home', 'HomeController@index')->name('home');

Route:: post('/check',[
    'users' => 'nomContrllr@currentfunction',
    'as' => 'check'
]);

Route::get('/users/details/{id}','UserController@detail');