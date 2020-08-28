@extends('layouts.app')

@section('content')
	<div class="container ">
		<form method="post" action="/addpost">
			@csrf

			<label>Title</label>
			<input type="text"  class="form-control" name="title" value="{{$post->title}}">
			<label>Description</label>
			<textarea rows=8 class="form-control" name="description">{{$post->description}}</textarea>
			<button type="submit" class="btn btn-primary">post</button>
		</form>

	</div>

@endsection