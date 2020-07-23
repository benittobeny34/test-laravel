<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>
@include('navbar_nonuser')
 <div class="row">
    <div class="content offset-md-3 col-md-6">
       
                    @foreach($posts as $post)
                    <div class="col-12">
                        <div class="card">      
                            <div class="card-body">
                                <h3>{{$post->title}}</h3>
                                <p>{{substr($post->description,0,50)}}...</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            <div class='col-md-3'>
               <h4>Recent 5 Posts</h4>
               <ol>
                @foreach($latestposts as $latest)
                 <li><a href="#">{{$latest->title}}</a>
                  <h6>{{$latest->created_at}}</h6></li>
                @endforeach
               </ol>
               <hr>
               <h4>Top 5 Tags</h4>
               
               <hr>
            </div>
    </div>
    <div class="row">
            <div class="offset-md-4" style="padding:2rem;">
                {{$posts->links()}}
            </div>
    </div>
          


</body>
</html>
