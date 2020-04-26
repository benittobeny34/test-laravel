@extends('template.index')

@section('main-content')
           <div>
               <button class="btn btn-sm btn-outline-primary" style="float:right"><a href="/addpost">Add New post</a></button>
           </div>
           <div>
            @foreach($posts as $post)
                <div class="row ">
                    <div class="col-12">
                        <div class="card px-1">
                            <h2>{{$post->title}}</h2><span>{{$post->created_at->diffForHumans()}}</span>
                            <div>
                            <button  class="btn btn-sm btn-outline-primary"><a href="/home/{{$post->id}}">View</a></button>                       
                            
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
         </div>


@endsection