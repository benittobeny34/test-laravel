@extends('template.index')

@section('content')
           <div>
 
                <div class="row ">
                    <div class="col-12">
                        <div class="card px-1">
                            <h2>{{$post->title}}</h2><span>{{$post->created_at->diffForHumans()}}</span>
                            <div class="card-body">
                                <p>{{$post->description}}</p>
                            </div>
                            <div>
                        <table><tr>
                            <td>
    
                            <button  class="btn btn-sm btn-outline-primary"><a href="{{route('home.edit',$post->id)}}">Edit</a></button>                       
                            </td>
                            <td class="px-3">
                            <form method="post" action="{{route('home.destroy',$post->id)}}">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                            </tr></table>
                            </div>
                        </div>
                    </div>
                </div>

         </div>


@endsection