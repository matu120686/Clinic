<?php

use GuzzleHttp\Middleware;

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//BACKOFFICE
//Route::get('/demo', 'RoleController@index')->name('demo');

Route::group(['middleware' => ['auth' ], 'as' => 'backoffice.'], function(){

    //Route::get('/role', 'RoleController@index')->name('role.index');
    Route::resource('user', 'UserController');

    Route::resource('role', 'RoleController');

    Route::resource('permission','PermissionController');

});







/*Route::get('demo',function(){
    return view('theme.backoffice.pages.demo');
});*/
//FRONTOFFICE

