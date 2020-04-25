<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests\PostValidation;
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
        return view('template.yourposts')->with('posts', $posts);
    }


    public function addNewPost(PostValidation $request)
    {

        Post::insert(['name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'created_at' => now(),
        ]);
        return redirect('/home');
    }

    public function show($id)
    {
        $post =Post::where('id', $id)->get()->first();
        return view('template.viewpost')->with('post',$post);
    }

    public function update(PostValidation $request, $id){

        Post::where('id',$id)->update(
           $request->only(['title','description'])
       );

        return response()->json([
            'success'=>'Data is successfully added',
            'title'=>$request->title,
            'description'=>$request->description
        ]);

    }


}
