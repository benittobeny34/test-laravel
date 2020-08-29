<?php

namespace App\Http\Controllers;

use Debugbar;

use Illuminate\Http\Request;

use App\Http\Requests\PostValidation;

use DB;

use Mail;

use App\Mail\PostMail;

use App\Mail\PostMailable;

use Yajra\Datatables\Datatables;

use Auth;

use App\User;

use App\Post;

use App\Comment;

use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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

        $post = new Post;

        $post->name = Auth::user()->name;

        $post->email = Auth::user()->email;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->user_id = Auth::id();

        $post->created_at = now();

        $post->save();

        $tags = explode(",", $request->tags);


        foreach ($tags as $value) {

            if (!(Tag::where('name', $value)->exists())) {
                $tagid[] = DB::table('tags')->insertGetId(['name' => $value,]);
            } 
            else {
                $tagid[] = Tag::where('name', $value)->pluck('id')->first();
            }
        }


        $post->tags()->attach($tagid);

        $details = [

            'subject' => 'Post Created',

            'title' => $post->title,

            'body' => $post->description,

            'url' => "http://127.0.0.1:8000/home/".$post->id,

        ];

        Mail::to($post->email)->send(new PostMail($details));

        Mail::to($post->email)->send(new PostMailable($details));

        return redirect('/home');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();


        return view('post.editpost')->with('post', $post);
    }

    public function show($id)
    {
        $post = Post::find($id);

        if(!$post){
            return view('errors.402');
        }
       
        return view('post.view')->with([

           'post' => $post, '

            post_tags' => $post->tags

        ]);
    }

    public function update(PostValidation $request, $id)
    {

        Post::find($id)->update($request->only(
            
            ['title', 'description',

        ]));

        $tags = explode(",", $request->tags);

        foreach ($tags as $value) {
         
            if (!(Tag::where('name', $value)->exists())) {
         
                $tagid[] = DB::table('tags')->insertGetId(['name' => $value,]);
         
            }
             else {
                $tagid[] = Tag::where('name', $value)->pluck('id')->first();
            
            }
        
        }

        $post = Post::find($id);

        $post->tags()->sync($tagid);

        $details = [

            'subject' => 'Post Edited',

            'title' => $post->title,

            'body' => $post->description,

            'url' => "http://127.0.0.1:8000/home/".$post->id,


        ];

        Mail::to($post->email)->send(new PostMail($details));

        Mail::to($post->email)->send(new PostMailable($details));

        return response()->json([
            'response' => 'success', 'title' => $request->title, 'description' => $request->description]);
    }

    public function destroy($id)
    {
        
        $post = Post::find($id);
        
        $post->comments()->delete();
        
        $post->tags()->delete();
        
        $post->delete();
        
        return redirect('/home');
    }

    //Task12

    public function allPosts()
    {
        
        $posts = Post::all();

        return Datatables::of($posts)
            ->addColumn('action', function ($post) {
                return '<a href="home/' . $post->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Show</a>';
            })->make(true);
    }

    public function myPosts()
    {

        $posts = Post::where('user_id', Auth::id())->get();

        return Datatables::of($posts)
            ->addColumn('action', function ($post) {
                return '<a href="home/' . $post->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Show</a>';
            })->make(true);
    }

    public function tagPosts($id)
    {
        # code...
        return view('post.tagpost')->with('posts',Tag::find($id)->posts);
    }

}
