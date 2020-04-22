@extends('template.index')

@section('content')
  <a href="/addpost" class="btn btn-primary" style="float:right;padding-bottom: 2px;">New Post</a>
                        <table class="table table-bordered" id="users-table">
                            <thead>
                            <tr>
                                <th>title</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>{{$post->created_at->diffForHumans()}}</td>
                                    <td>
                                        <button class="btn btn-info"><a href="home/{{$post->id}}/edit">Edit</a></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger"><a href="home/{{$post->id}}">Delete</a></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


@endsection