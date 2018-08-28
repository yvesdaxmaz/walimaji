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

Route::group(['middleware' => 'admin'], function () {
    Route::get('/users','Admin\AdminController@usersList')->name('users');
    Route::get('/userDetail/{id}','Admin\AdminController@userDetail')->name('userDetail');
    Route::get('/removeUser/{id}','Admin\AdminController@removeUser')->name('removeUser');
});