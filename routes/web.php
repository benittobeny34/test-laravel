<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('show','HomeController@index');


Auth::routes();








Route::get('template',function(){
	return view('template.index');
});

Route::group(['middleware' => 'auth'], function () {

	Route::resource('home', 'PostController'); 

    Route::get('addpost',function(){
    	return view('post.addpost');
    })->name('addpost'); 

    Route::post('addpost','PostController@addNewPost');

    Route::get('all-post','PostController@allPosts')->name('all-posts');

    Route::get('your-posts',function(){
        return view('post.my-post');
    })->name('your-posts');

    Route::get('my-posts','PostController@myPosts')->name('my-posts');



   // more route definitions

});


Route::get('check',function(){
	return view('template.layout');
});