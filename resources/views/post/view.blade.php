@extends('template.index')

@section('main-content')
           <div>
               <button class="btn btn-sm btn-outline-primary" style="float:right"><a href="/addpost">Add New post</a></button>
           </div>
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
    
                            <button  class="btn btn-sm btn-outline-primary"><a href="/home/{{$post->id}}/edit">Edit</a></button>                       
                            </td>
                            <td class="px-3">
                            <form action="/home/{{$post->id}}">
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