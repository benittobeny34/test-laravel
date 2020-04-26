@extends('template.index')

@section('main-content')
           <button></button>
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <h2>{{$post->title}}</h2><span>{{$post->created_at->diffForHumans()}}</span>
                            <div class="card-body">
                                <p>{{$post->description}}</p>
                            </div>
                            
                            <button type="button" class="btn  btn-outline-primary"><a href="home/{{$post->id}}/edit">Edit</a></button></button>
                            <button type="button" class="btn  btn-outline-danger"><a href="home/{{$post->id}}/edit">Delete</a></button></button>
                            

                        </div>
                    </div>
                </div>
                @endforeach


@endsection