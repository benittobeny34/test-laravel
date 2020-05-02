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

class QueryBuilderPostController extends Controller
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
                $tagid[] = DB::table('tags')->where('name', $value)->pluck('id')->first();
            }
        }

        info($tagid);

        foreach ($tagid as $value) {
            DB::table('post_tag')->updateOrInsert(['post_id' => $post->id, 'tag_id' => $value]);
       }

        // $post->tags()->attach($tagid);

        return redirect('/home');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();

        return view('post.editpost')->with('post', $post);
    }

    public function show($id)
    {
        $post = Post::find($id);
        $alltags=DB::table('tags')->join('post_tag', 'tags.id', '=', 'post_tag.tag_id')->where('post_tag.post_id',$id)->get(); 
        $tags=[];
        foreach($alltags as $tag){
            $tags[] = $tag->name;
        }


        return view('post.view')->with(['post' => $post, 'tags' => $tags]);
    }

    public function update(PostValidation $request, $id)
    {

        Post::find($id)->update($request->only(
            ['title', 'description',])
        );

        $tags = explode(",", $request->tags);

        foreach ($tags as $value) {
            if (!(DB::table('tags')->where('name', $value)->exists())) {
                $tagid[] = DB::table('tags')->insertGetId(['name' => $value,]);
            } else {
                $tagid[] = DB::table('tags')->where('name', $value)->pluck('id')->first();
            }
        }

        $post = DB::table('posts')->find($id);
        // $post->tags()->sync($tagid);
        $exist_tag=DB::table('post_tag')->where('post_id', $id)->pluck('tag_id')->toArray();    
        $difference=array_diff($exist_tag,$tagid);
        foreach ($difference as $value) {
            DB::table('post_tag')->where([['post_id', $post->id],['tag_id', $value]])->delete();
        }
       foreach ($tagid as $value) {
            DB::table('post_tag')->updateOrInsert(['post_id' => $post->id, 'tag_id' => $value]);
       }

        return response()->json([
            'response' => 'success', 'title' => $request->title, 'description' => $request->description]);
    }

    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
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


}
