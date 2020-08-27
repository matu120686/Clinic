<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin',function(){
    return view('theme.backoffice.layouts.admin');
});
Route::get('/demo',function(){
    return view('theme.backoffice.pages.demo');
});
