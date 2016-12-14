<?php
// index
Route::get('/', 'IndexController@getShowDashboard');
Route::post('/{mid}/points', 'IndexController@updatePoints');

// authentication
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// members
Route::get('membership', 'MembershipController@index');
Route::post('membership', 'MembershipController@postCreate');
Route::get('membership/{member_id}', 'MembershipController@viewEdit');
Route::post('membership/{member_id}/update', 'MembershipController@postUpdate');
Route::delete('membership/{member_id}', 'MembershipController@remove');

// user
Route::get('user/create-input', 'UserController@getCreateInput');
Route::post('user/create-confirm', 'UserController@postCreateConfirm');
Route::post('user/create-complete', 'UserController@postCreateComplete');

// test
Route::get('testlogin', 'TestController@login');
Route::get('testdashboard', 'TestController@dashboard');

// category
Route::group(['prefix'=>'wifi', 'middleware'=>'auth'], function(){
    Route::get('print', 'WifiController@printGuest');
    Route::get('print/{mid}', 'WifiController@printWifi');
    Route::get('renew/{mid}/{period}',                      ['uses'=>'WifiController@renew','as'=>'wifi.renew']);
    Route::post('update', 'WifiController@update');
    Route::get('/',                                         ['uses'=>'WifiController@search','as'=>'wifi.search']);
    Route::put('users/{id}', 'UserController@update');
    Route::delete('users/{id}', 'UserController@deleteUser');
});

// category
Route::group(['prefix'=>'users', 'middleware'=>'auth'], function(){
    Route::get('users', 'UserController@getUsers');
    Route::post('users', 'UserController@createUser');
    Route::put('users/{id}', 'UserController@update');
    Route::delete('users/{id}', 'UserController@deleteUser');
});