<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\Comment\CommentCollection;
use App\Http\Resources\Comment\CommentResource;
use App\Post;
use Illuminate\Http\Request;

class ApiCommentController extends Controller
{

    public function index($id)
    {  
        $comments = Post::findorFail($id)->comments;
        if(count($comments) > 0)
            return CommentCollection::collection($comments);
        return response()->json(['data'=>'No comments yet posted']);
    }

    public function show($id)
    {
        return new CommentResource(Comment::findOrFail($id));
    }

}
