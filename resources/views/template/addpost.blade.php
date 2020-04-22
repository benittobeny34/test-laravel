@extends('template.index')
@section('content')
	<div class="container ">
	<form method="post" action="/addpost">
		@csrf
		@if ($errors->any())
		
		            @foreach ($errors->all() as $error)
		                <div class="alert alert-danger">
		                {{ $error }}
		                </div>
		            @endforeach
		    
		    
		@endif
		<label>Title</label><input type="text" placeholder="Title" class="form-control" name="title">
		<label>Description</label><textarea placeholder="description about your title" class="form-control" name="description"></textarea>
		<button type="submit" class="btn btn-primary">post</button>
	</form>

	</div>
@endsection
