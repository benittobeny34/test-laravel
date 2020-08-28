<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $posts = Post::where('user_id', Auth::id())->get();
       
        return view('home')->with('posts', $posts);
    
    }


    public function addNewPost(Request $request)
    {

        Post::insert([

            'name' => Auth::user()->name,
            
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
