<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>
                    Blog-Mallow
                </title>
                <link href="{{asset('css/preloader.css')}}" rel="stylesheet">
                <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
                    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
                        <link href="{{asset('datatable/dataTables.min.css')}}" rel="stylesheet">
                            <script defer="" src="{{asset('datatable/dataTables.min.js')}}">
                            </script>
                            <script src="{{asset('js/jquery.min.js')}}">
                            </script>
                            <script src="{{asset('js/post.js')}}">
                            </script>
                            <script src="{{asset('plugins/toastr/js/toastr.min.js')}}">
                            </script>
                            <link href="{{asset('plugins/toastr/css/toastr.min.css')}}" rel="stylesheet" type="text/css">
                            </link>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div class="preloader-content">
            <div class="loading">
                <p>
                    loading
                </p>
                <span>
                </span>
            </div>
        </div>
        <div class="section">
        @include('template.navcontent')
        <div class="row no-gutters content">
            @include('template.leftsidebar')
            <div class="col-md-8 col-lg-8 col-xs-12 main-content">
                <div class="search-results">
                </div>
                <div class="posts-contents">
                    <div class="posts">
                        @foreach($posts as $post)
                        <li>
                            <a href="{{url('/home/'.$post->id)}}">
                                <div class="post-title">
                                    {{$post->title}}
                                    <span>
                                        {{$post->created_at}}
                                    </span>
                                </div>
                                <div class="post-description">
                                    {{substr($post->description,0,100)}}...
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </div>
                    <div class="pagination active">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
            @include('template.rightsidebar')
        </div>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}">
    </script>
    <script type="text/javascript">
        window.addEventListener('load',()=>{
    const preload = document.querySelector('.preloader-content');
        preload.classList.add('disappear');


})
    </script>
</html>