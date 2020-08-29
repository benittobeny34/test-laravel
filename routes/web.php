<?php

use App\Post;

use Illuminate\Support\Facades\Route;

Route::get('/check', function () {
   
    return Post::withCount('comments')->orderBy('comments_count', 'desc')->take(10)->get();
});

Route::get('/', 'HomeController@index');

Auth::routes();


Route::group([],function () {

    Route::resource('home', 'PostController');
    
    Route::get('all-post', 'PostController@allPosts')->name('all-posts');
    
    Route::post('comment/{id}', 'CommentController@addComment')->name('comment');

    Route::get('view-comments/{id}', 'CommentController@viewComments')->name('view-comments');

    Route::get('comments/{id}/edit', 'CommentController@edit');

    Route::get('comments/{id}/delete', 'CommentController@destroy');

    Route::post('comments/{id}/{post_id}/update', 'CommentController@update')->name('comments.update');

    Route::get('tagposts/{id}', 'PostController@tagPosts')->name('tagposts');

});
Route::group(['middleware' => 'auth'], function () {

    Route::get('addpost', function () {
        return view('post.addpost');
    })->name('addpost');

    Route::post('addpost', 'PostController@addNewPost');

    Route::get('your-posts', function () {
        return view('post.my-post');
    })->name('your-posts');

    Route::get('my-posts', 'PostController@myPosts')->name('my-posts');

    // more route definitions

});

Route::group(['middleware' => ['auth']], function () {

    Route::get('admin', 'AdminController@index');
   
    Route::get('/users', 'AdminController@allUsers')->name('all-users');
   
    Route::get('/assignroles/{id}', 'AdminController@viewrole');
   
    Route::post('/updateroles/{id}', 'AdminController@updaterole')->name('roleupdate');
});

Route::get('/global-search', 'GlobalSearch');


