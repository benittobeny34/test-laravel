<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Document</title>
	<style type="text/css">
	h3{
		display: inline;
	}
</style>
</head>
<body>

@foreach($posts as $post)
 <div><h3>{{$post->title}}</h3><small> {{$post->created_at}}</small></div>
 <div>{{$post->description}}</div>
 <br><br>
@endforeach
</body>
</html>