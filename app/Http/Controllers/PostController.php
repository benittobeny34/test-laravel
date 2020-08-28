<?php

namespace App\Http\Controllers;

use Debugbar;

use Illuminate\Http\Request;

use App\Http\Requests\PostValidation;

use DB;

use Yajra\Datatables\Datatables;

use Auth;

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

        return view('home');
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
    public function addNewPost(PostValidation $request)
    {

        Post::insert([

            'name' => Auth::user()->name,
            
            'email' => Auth::user()->email,
            
            'title' => $request->title,
            
            'description' => $request->description,
            
            'user_id' => Auth::id(),
            
            'created_at'=>now(),
        
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
       
        $post=Post::where('id', $id)->first();
       
        return view('post.view')->with('post',$post);
    }

    public function update(PostValidation $request,$id){

            Post::where('id',$id)

                ->update($request->only([
                    
                    'title',

                    'description',
                ]));
            
            return response()
                ->json([
                   
                    'response'=>'success',
                   
                    'title'=>$request->title,
                   
                    'description'=>$request->description
                ]);
    }

    public function destroy($id){
        
        Post::where('id',$id)->delete();
        
        return redirect('/home');
    
    }

    public function allPosts()
    {

        $posts = Post::all();

        return Datatables::of($posts)
            
            ->addColumn('action', function ($post) {
                
                return '<a href="home/'.$post->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Show</a>';
            
            })->make(true);
    }

     public function myPosts()
    {
   
        $posts = Post::where('user_id',Auth::id())->get();

        return Datatables::of($posts)
           
            ->addColumn('action', function ($post) {
           
                return '<a href="home/'.$post->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Show</a>';
            
            })->make(true);
    }

}
