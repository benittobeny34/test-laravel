<?php

namespace App\Http\Controllers;

use Debugbar;
use Illuminate\Http\Request;
use App\Http\Requests\PostValidation;
use DB;

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

    public function __construct()
    {
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
            } else {
                $tagid[] = Tag::where('name', $value)->pluck('id')->first();
            }
        }

        info($tagid);

        $post->tags()->attach($tagid);

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
       
        return view('post.view')->with(['post' => $post, 'post_tags' => $post->tags]);
    }

    public function update(PostValidation $request, $id)
    {

        Post::find($id)->update($request->only(
            ['title', 'description',])
        );

        $tags = explode(",", $request->tags);

        foreach ($tags as $value) {
            if (!(Tag::where('name', $value)->exists())) {
                $tagid[] = DB::table('tags')->insertGetId(['name' => $value,]);
            } else {
                $tagid[] = Tag::where('name', $value)->pluck('id')->first();
            }
        }

        $post = Post::find($id);
        $post->tags()->sync($tagid);

        return response()->json([
            'response' => 'success', 'title' => $request->title, 'description' => $request->description]);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->comments()->delete();
        $post->delete();
        return redirect('/home');
    }

    //Task12

    public function allPosts()
    {

        info('allPosts executed ');
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
