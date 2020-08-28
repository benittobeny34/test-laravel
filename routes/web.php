<?php

use Illuminate\Support\Facades\Route;



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


});


Route::get('check',function(){
	
    return view('template.layout');

});