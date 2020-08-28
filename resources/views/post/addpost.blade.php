@extends('layouts.app')

@section('content')
	
	<div class="container ">
	
		<form method="post" action="/addpost">
			@csrf
			
			<label>Title</label><input type="text"  class="form-control" name="title">
			
			<label>Description</label><textarea placeholder="description about your title" class="form-control" name="description"></textarea>
			
			<button type="submit" class="btn btn-primary">post</button>
		
		</form>

	</div>

@endsection