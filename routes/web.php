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

Route::get('show', 'HomeController@index');


Auth::routes();


Route::get('template', function () {
    return view('template.index');
});

Route::group(['middleware' => 'auth'], function () {

    Route::resource('home', 'PostController');

    Route::get('addpost', function () {
        return view('post.addpost');
    })->name('addpost');

    Route::post('addpost', 'PostController@addNewPost');

    Route::get('all-post', 'PostController@allPosts')->name('all-posts');

    Route::get('your-posts', function () {
        return view('post.my-post');
    })->name('your-posts');

    Route::get('my-posts', 'PostController@myPosts')->name('my-posts');

    Route::post('comment/{id}', 'CommentController@addComment')->name('comment');

    Route::get('view-comments/{id}', 'CommentController@viewComments')->name('view-comments');

    Route::get('comments/{id}/edit', 'CommentController@edit');

    Route::get('comments/{id}/delete', 'CommentController@destroy');

    Route::post('comments/{id}/{post_id}/update', 'CommentController@update')->name('comments.update');

    Route::get('tagposts/{id}','PostController@tagPosts');


    // more route definitions

});

Route::group(['middleware' =>['auth']],function(){

    Route::get('admin','AdminController@index');
    Route::get('/users','AdminController@allUsers')->name('all-users');
    Route::get('/assignroles/{id}','AdminController@viewrole');
    Route::post('/updateroles/{id}','AdminController@updaterole')->name('roleupdate');
});


// //QueryBuilder controller

// // Route::group(['middleware' => 'auth'], function () {

// //     Route::resource('home', 'QueryBuilderPostController');

// //     Route::get('addpost', function () {
// //         return view('post.addpost');
// //     })->name('addpost');

// //     Route::post('addpost', 'QueryBuilderPostController@addNewPost');

// //     Route::get('all-post', 'QueryBuilderPostController@allPosts')->name('all-posts');

// //     Route::get('your-posts', function () {
// //         return view('post.my-post');
// //     })->name('your-posts');

// //     Route::get('my-posts', 'QueryBuilderPostController@myPosts')->name('my-posts');

// //     Route::post('comment/{id}', 'CommentController@addComment')->name('comment');

// //     Route::get('view-comments/{id}', 'CommentController@viewComments')->name('view-comments');

// //     Route::get('comments/{id}/edit', 'CommentController@edit');

// //     Route::get('comments/{id}/delete', 'CommentController@destroy');

// //     Route::post('comments/{id}/{post_id}/update', 'CommentController@update')->name('comments.update');


// //     // more route definitions

// // });





 