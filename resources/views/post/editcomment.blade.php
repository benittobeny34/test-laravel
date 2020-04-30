@extends('template.index')

@section('content')
    <div class="jumbotron">
        <form method="post" action={{route('comments.update',[$comment->id,$comment->post_id])}}>
            @csrf
            <textarea class="form-control" name="comment" cols="30" rows="10">{{$comment->comment}}</textarea>
            <button class="btn btn-primary">update comment</button>
        </form>
    </div>

@endsection
