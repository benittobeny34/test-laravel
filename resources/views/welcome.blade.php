<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-Mallow</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
           
    <link rel="stylesheet" href="{{asset('datatable/dataTables.min.css')}}">
    <script src="{{asset('datatable/dataTables.min.js')}}" defer></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
</head>

<body>
    <div class="navbox">
        <div class="navlogo">
            <div class="logo-name"><img src="{{asset('mallow_icon.jpeg')}}" width="30px" height="30px">Mallow</div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="navdiv">
            <li class="nav-items">
                <a class="nav-links" href="{{route('login')}}">login</a>
            </li>

            <li class="nav-items">
                <a class="nav-links" href="{{route('register')}}">Register</a>
            </li>
            <form class="search">
                <input class="" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
    <div class="row no-gutters content">
        <div class="col-md-2 col-lg-2 col-xs-12 sidebar-left">
            @auth
            <div class="dashboard">
                <span>DASHBOARD</span>
            </div>
            <div class="link-header">
                <div class="link-title">Post Option <span class="arrow">&rarr;</span></div>
                <div class="links">
                    <li>Create post</li>
                    <li>View Post</li>
                    <li>Recent Posts</li>
                    <li>Top 5 Posts</li>
                </div>
            </div>
            <div class="link-header">
                <div class="link-title">Top Tags<span class="arrow">&rarr;</span></div>
                <div class="links">
                    <li>General</li>
                    <li>knowledge</li>
                    <li>Tech</li>
                    <li>Programming</li>
                </div>
            </div>
            <div class="link-header">
                <div class="link-title">Activity <span class="arrow">&rarr;</span></div>
                <div class="links">
                    <li>Your posts</li>
                    <li>Your Comments</li>
                </div>
            </div>
         @endauth

            
        </div>
        <div class="col-md-8 col-lg-8 col-xs-12 main-content">
            <div class="posts">
                @foreach($posts as $post)
                  <li>
                      <div class="post-title">{{$post->title}} <span>{{$post->created_at}}</span> </div>
                      <div class="post-description">{{substr($post->description,0,60)}}...</div>
                  </li>
                @endforeach
            </div>
           <div class="pagination">
                {{$posts->links()}}
           </div>
            
        </div>
        <div class="col-md-2 col-lg-2 col-xs-12 sidebar-right">
            <div class="link-header">
                <div class="link-title">Top 5 tags <span class="arrow">&rarr;</span></div>
                <div class="links">
                    <li>Python</li>
                    <li>java</li>
                    <li>PHP</li>
                </div>
            </div>
            <div class="link-header">
                <div class="link-title">Recent Posts <span class="arrow">&rarr;</span></div>
                <div class="links">
                    @foreach($latestposts as $post)
                    <li>{{$post->title}}</li>
                    @endforeach
                </div>
            </div>
            
        </div>
</body>

<script src="{{asset('js/app.js')}}"></script>

</html>