@extends('template.index')

@section('main-content')
	
	<div class="container ">

	<form method="post" action="/home/{{$post->id}}">
		@csrf
 		
 		<input type="hidden" name="_method" value="PUT">
		
		<div class="form-group">
			@if(count($errors) > 0)
				@foreach($errors->all() as $error)
					<div class="alert alert-danger">$error</div>
				@endforeach
			@endif
			
			<label>Title:</label>
            
            <input type="text" name="title" class="form-control input-flat" value="{{$post->title}}">
        </div>
		
		<div class="form-group">
  			<label>Description:</label>
			<textarea class="form-control h-150px" rows="6" name="description" id="description">{{$post->description}} </textarea>
       </div>
		
		<button type="submit" class="btn btn-dark">Update</button>
	
	</form>

	</div>

@endsection