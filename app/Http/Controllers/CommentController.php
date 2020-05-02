<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Post;
use App\User;
use App\Comment;

use DB;

class CommentController extends Controller
{

    public function edit($id)
    {
        $comment = Comment::where('id', $id)->first();
        return view('post.editcomment')->with('comment', $comment);
    }

    public function update(Request $request, $id, $post_id)
    {
        //
        Comment::where('id', $id)->update([
            'comment' => $request->comment,
        ]);


        return redirect('/home/' . $post_id)->with('message', 'Your Comment Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Comment::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Your Comment Deleted Successfully');

    }

    //Task 15

    public function addComment(Request $request, $id)
    {

        $request->validate([
            'comment' => 'required',
        ]);

        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $id;
        $comment->commented_by = Auth::id();

        $comment->save();

        return '<div class="jumbotron">
        <h4>' . Auth::user()->name . '</h4>
        <p>' . $request->comment . '</p>
        <button  class="btn btn-xs btn-primary "><a href="/comments/' . $comment->id . '/edit">Edit</a></button>
        <button  class="btn btn-xs btn-danger "><a href="/comments/' . $comment->id . '/delete">delete</a></button>

        </div>';
    }

    public function viewComments($id)
    {
        $comments = Post::find($id)->comments;
        // $comments = Db::table('posts')->join('comments','posts.id','=','comments.post_id')->where('post_id',24)->select('comments.comment')->get();

        $html = "";

        foreach ($comments as $comment) {

            $user = User::where('id', $comment->commented_by)->first();

            $html .= '<div class="jumbotron">
        <h4>' . $user->name . '</h4>
        <p>' . $comment->comment . '</p>
        <button  class="btn btn-xs btn-primary "><a href="/comments/' . $comment->id . '/edit">Edit</a></button>
        <button  class="btn btn-xs btn-danger "><a href="/comments/' . $comment->id . '/delete">delete</a></button>
        </div>';

        }

        return $html;
    }

}
