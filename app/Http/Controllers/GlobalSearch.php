<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Tag;

use App\Post;


class GlobalSearch extends Controller
{
   public function __invoke(Request $request){
    
    $tags = Tag::select(['id','name'])->where('name', 'LIKE', "%{$request->key}%")->take(5)->get();
    $posts = Post::select(['id','name','title','description'])->where('title', 'LIKE', "%{$request->key}%")->take(5)->get();
    
    return response()->json([
            'response' => 'success','tags'=>$tags,'posts'=>$posts]);

   }
}
