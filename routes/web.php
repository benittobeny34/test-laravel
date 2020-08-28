<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    return view('welcome');
});

Route::get('show','Postcontroller@index');

Route::get('anydata','Postcontroller@anydata')->name('datatables.data');

Route::get('index','Postcontroller@datatable')->name('datatable');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('addpost',function(){

	return view('post.addpost');

})->middleware('auth');

Route::post('addpost','HomeController@addNewPost');

Route::resource('home', 'HomeController');