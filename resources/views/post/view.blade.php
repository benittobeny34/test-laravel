@extends('template.index')

@section('content')

    

    <div class="container">
        @if (session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get('message')}}</strong> .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

        <h1 id="post-title">{{$post->title}}<small class='timestamp'>{{$post->created_at}}</small></h1>
        
        <div id="post-description" class="jumbotron">
            {{$post->description}}
            @can('edit')
                <table>
                    <tr>
                        <td>
                            <button class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal-{{$post->id}}">Edit
                            </button>
                        </td>
                        <td>
                            <form method="post" action={{route('home.destroy',$post->id)}}>
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit">Discard</button>
                            </form>
                        </td>
                    </tr>
                </table>
            @endcan
        </div>

    <label>Tags:</label>
    @foreach($post_tags as $tag)
        <span class="label label-info">
            <a href="/tagposts/{{$tag->id}}">{{$tag->name}}</a></span>
    @endforeach


    <div class="modal fade" id="exampleModal-{{$post->id}}" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" id="editform" action="{{route('home.update',[$post->id])}}">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                            <span id="title-error" class="text-danger"></span>

                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea name="description" class="form-control"
                                      id="description">{{$post->description}}</textarea>
                            <span id="message-error" class="text-danger"></span>

                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Tags:</label>
                            <input name="tags" id="input-tags" class="form-control input-flat"
                                   value="@foreach($post_tags as $tag){{$tag->name}},@endforeach">
                            <span id="tag-error" class="text-danger"></span>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="update-post" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr>
    @can('edit')
        <h4><em>Add Comment</em></h4>
        <form id="comment-form" method="post" action="{{route('comment',$post->id)}}">
            @csrf
            <div class="form-group">
            <textarea class="form-control h-150px @error('comment') is-invalid @enderror" rows="6"
                      placeholder="Add comment ....." name="comment" id="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Add</button>
        </form>
        <hr>
    @endcan

    <div class="sample">
        <form id="get-comments" method="GET" action="{{route('view-comments',$post->id)}}">
            @csrf
            <button type="sumbit" class="comments-load btn btn-xs btn-primary ">View all Comments</button>
        </form>
    </div>

 </div>

    <script type="text/javascript">
        $('#input-tags').tagsInput();
    </script>

@endsection
