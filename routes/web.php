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

//Connected user Routes
Route::get('/user/followers','UserController@showFollowers')->name('user/followers');
Route::get('/user/following','UserController@showFollowing')->name('user/following');
Route::get('/user/providers','UserController@showFollowing')->name('user/providers');
Route::get('/user/userDetail/{id}','UserController@ShowUserDetail')->name('user/userDetail');
Route::get('/user/profil','UserController@showProfil')->name('user/profil');
Route::get('/user/productsRefDetail/{id}','UserController@ShowReferenceDetail')->name('user/productsRefDetail');
Route::get('/user/products','UserController@ShowProductsList')->name('user/products');


//Admin Routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/Admin_users','Admin\AdminController@usersList')->name('Admin_users');
    Route::get('/Admin_userDetail/{id}','Admin\AdminController@userDetail')->name('Admin_userDetail');
    Route::get('/Admin_removeUser/{id}','Admin\AdminController@removeUser')->name('Admin_removeUser');
    Route::get('/Admin_Products','Admin\AdminController@ProductsList')->name('Admin_Products');
    Route::get('/Admin_productsRef','Admin\AdminController@productsRef')->name('Admin_productRef');
    Route::get('/Admin_productsRefDetail/{id}','Admin\AdminController@ReferenceDetail')->name('Admin_productsRefDetail');
    Route::get('/Admin_productsType','Admin\AdminController@productsType')->name('Admin_productType');
});