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
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
=======
Route::get('/','welcomeController@index');
>>>>>>> 02e3a77156bd1074832905e60a770f9e2f2fcede

Auth::routes();
Route::get('/register_', 'Admin\UserTypeController@index')->name('register_');;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userType',function (){
    return view('admin.userType.add');
});
Route::post('/userType','Admin\UserTypeController@store');
