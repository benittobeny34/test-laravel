@extends('template.index')
@section('content')
    <div class="container ">
        <form method="post" action="/addpost">
            @csrf

            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control input-flat @error('title') is-invalid @enderror"
                       placeholder="Title">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control h-150px @error('description') is-invalid @enderror" rows="6"
                          placeholder="Description" name="description" id="description"></textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Tags:</label>
                <input name="tags" id="input-tags" class="form-control input-flat  @error('tags') is-invalid @enderror">
                @error('tags')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Create Post</button>
        </form>

    </div>
    <script type="text/javascript">
        $('#input-tags').tagsInput();
    </script>
@endsection