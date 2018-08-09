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

<<<<<<< HEAD
Route::get('/', 'welcomeController@index');
=======
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/','welcomeController@index');
>>>>>>> 2ab1671b474f67ab578c1a5583b143e5dd2905b0

Auth::routes();
Route::get('/register_', 'Admin\UserTypeController@index')->name('register_');;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userType', function () {
    return view('admin.userType.add');
});
Route::post('/userType', 'Admin\UserTypeController@store');
