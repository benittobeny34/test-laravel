<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Http\Resources\Post\PostCollection;
use App\Http\Resources\Post\PostResource;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ApiPostcontroller extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
   
    public function index()
    {
       return PostCollection::collection(Post::all());
    }

    public function store(Request $request)
    {
         Validator::make($request->all(),[
            'title'=>['required','string'],
            'name'=>['required','string'],
            'email'=>['required','email','string'],
            'user_id'=>['required','numeric'],
            'description'=>['required','string']
        ])->validate();
        $post=new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->save();

        return response()->json([
            'success'=>'post created successfully',
            'link'=>route('posts.show',$post->id),
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

    public function update(Request $request, $id)
    {
         $post= Post::findOrFail($id);
         $post->name = $request->name ?: $post->name;
         $post->email = $request->email ?: $post->email;
         $post->user_id = $request->user_id ?: $post->user_id;
         $post->title = $request->title ?: $post->title;
         $post->description = $request->description ?: $post->description;
         $post->updated_at = now();
         $post->save();

        return response()->json(['success'=>'post updated successfully','link'=>route('posts.show',$post->id)],Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        Comment::where('post_id',$id)->delete();
        $post->delete();
        return response()->json(['success'=>'Post Deleted Successfully.No longer access'],Response::HTTP_OK);
    }
}
