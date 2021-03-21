<?php

Auth::routes(['verify'=>True]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/',function (){
   return 'home';
});

