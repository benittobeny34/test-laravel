@extends('template.index')
@section('main-content')
	<div class="container ">
	<form method="post" action="/addpost">
		@csrf

		<div class="form-group">
					<label>Title:</label>
                    <input type="text" name="title" class="form-control input-flat" placeholder="Title">
        </div>
		<div class="form-group">
  			<label>Description:</label>
		<textarea class="form-control h-150px" rows="6" placeholder="Description" name="description" id="description"></textarea>
   </div>
		<button type="submit" class="btn btn-dark">Update</button>
	</form>

	</div>
@endsection