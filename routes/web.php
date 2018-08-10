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

Route::get('/', 'welcomeController@index');

Auth::routes();
Route::get('/register_', 'Admin\UserTypeController@index')->name('register_');;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userType', function () {
    return view('admin.userType.add');
});
Route::post('/userType', 'Admin\UserTypeController@store');

Route:: post('/check',[
    'users' => 'nomContrllr@currentfunction',
    'as' => 'check'
]);