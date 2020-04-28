<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Auth;

use App\Post;

use Yajra\Datatables\Datatables;

class PostController extends Controller
{

    public function  __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        //
        return view('home');
    }


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


    public function edit($id)
    {
        $post = Post::where('id', $id)->first();

        return view('post.editpost')->with('post', $post);
    }

    public function show($id)
    {
        $post=Post::where('id', $id)->first();
        return view('post.view')->with('post',$post);
    }

    public function update(Request $request,$id)
    {
            Post::where('id',$id)->update($request->only(
                ['title','description','created_at',])
               );
            return redirect('/home');
    }

    public function destroy($id){
        Post::where('id',$id)->delete();
        return redirect('/home');
    }

    public function addNewPost(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]);

        Post::insert(['name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'created_at'=>now(),
        ]);
        return redirect('/home');
    }


    public function allPosts()
    {


        $posts = Post::select(['id', 'name', 'email', 'title', 'description', 'created_at']);

        return Datatables::of($posts)
            ->addColumn('action', function ($post) {
                return '<a href="home/'.$post->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Show</a>';
            })->make(true);
    }

     public function myPosts()
    {


        $posts = Post::where('user_id',Auth::id())->select(['id', 'name', 'email', 'title', 'description', 'created_at']);

        return Datatables::of($posts)
            ->addColumn('action', function ($post) {
                return '<a href="home/'.$post->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Show</a>';
            })->make(true);
    }

    // return Datatables::of(Post::query())->make(true);


}
