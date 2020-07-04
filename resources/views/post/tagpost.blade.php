@extends('template.index')

@section('content')

    <div class="container-fluid">
        
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-12">
                        <div class="card">
                            {{-- {{$post->pivot->name}} --}}
                            <div class="card-body">
                                <h3>{{$post->title}}</h3>
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        
@endsection
