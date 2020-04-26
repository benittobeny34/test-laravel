<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $posts = Post::where('user_id', Auth::id())->get();
        return view('home')->with('posts', $posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function addNewPost(Request $request)
    {

        Post::insert(['name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);
        return redirect('/home');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();

        return view('post.editpost')->with('post', $post);
    }

    public function show($id)
    {
        Post::where('id', $id)->delete();
        return redirect('/home');
    }

}
