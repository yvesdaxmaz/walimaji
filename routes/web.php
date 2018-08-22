<?php



Route::get('/', 'WelcomeController@index');

Auth::routes();
Route::get('/register', 'Admin\UserTypeController@index')->name('register2');;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userType', function () {
    return view('admin.userType.add');
});
Route::post('/userType', 'Admin\UserTypeController@store');

Route:: post('/check',[
    'users' => 'nomContrllr@currentfunction',
    'as' => 'check'
]);

Route::get('/userDetail',function (){
    return view('user.detail');
});