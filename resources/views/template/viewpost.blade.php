@extends('template.index')
@section('content')
<div class="container">
        <h1 >{{$post->title}}</h1>
        <h5>{{$post->created_at->diffForHumans()}}</h5>
        <div class="jumbotron">
            {{$post->description}}
        </div>
</div>
 <table>
    <tr>
        <td><button  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$post->id}}">Edit</button>
        </td>
         <td>
            <form method="post" action=home/{{$post->id}}>
                {{ method_field('DELETE') }}
            <button  class="btn btn-danger" type="submit">Discard</button> 
         </form>
        </td>
     </tr>
     </table>


                     <div class="modal fade" id="exampleModal-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            
                            <form method="post" id="editform" action="/home/{{$post->id}}">
                                @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Title:</label>
                                                            <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                                                            <span id="title-error" class="text-danger"></span>
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description" class="col-form-label">Description:</label>
                                                            <textarea name="description" class="form-control" id="description">{{$post->description}}</textarea>
                                                            <span id="message-error" class="text-danger"></span>
                                                            
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button  type="submit" id="update-post" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>

@endsection
