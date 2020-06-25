@extends('template.index')

<style type="text/css">
	label{
		text-align: center;
	}
	main{
		width: 100%;
		margin:1rem auto;
	}
</style>

@section('content') 
       	@if($errors->any())
	  @foreach($errors->all() as $error)
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{$error}}</strong> .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
	  @endforeach
	@endif

	@if(Session::has('message'))
	 <div class="alert alert-success">{{session()->get('message')}}</div>
	@endif

   <form method="post" action="{{route('roleupdate',$id)}}">
   	@csrf
	 					<div class="basic-form">
                                    <form>
                                    	<div class="form-group">
                                    		<label>Role:</label>
                                            <select name='role' class="form-control input-default">
                                            	<option value='admin'>Admin</option>
                                            	<option value='user'>User</option>
                                            	<option value='editor'>Editor</option>
                                            	<option value='publisher'>Publisher</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        	<label>Permission:</label>
                                        	<br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input name='permission[]' type="checkbox" class="form-check-input" value="edit">Edit post</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input name='permission[]' type="checkbox" class="form-check-input" value="create">Create post</label>
                                            </div>
                                            <div class="form-check form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input name='permission[]' type="checkbox" class="form-check-input" value="view" >View post</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<input type="submit" class=' btn btn-lg btn-primary' value='submit'>
                                        </div>
                                    </form>
                                </div>
   </form>
   	

@endsection


								