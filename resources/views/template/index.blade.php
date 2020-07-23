
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/templateStyle.css')}}"> --}}
  <script src="{{asset('js/jquery.min.js')}}"></script>
   
    <link rel="stylesheet" href="{{asset('datatable/dataTables.min.css')}}">
    <script src="{{asset('datatable/dataTables.min.js')}}" defer></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="{{asset('js/post.js')}}"></script>
   
    <script src="{{asset('plugins/toastr/js/toastr.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/css/toastr.min.css')}}">
  
    <script src="{{asset('js/taginput.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/taginput.min.css')}}">
   <script src="{{asset('js/taginput.min.js')}}"></script>
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
            @guest
            <li class="nav-items">
                <a class="nav-links" href="{{route('login')}}">login</a>
            </li>

            <li class="nav-items">
                <a class="nav-links" href="{{route('register')}}">Register</a>
            </li>
            @else
               <li class="nav-item dropdown">

                             @role('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin') }}">{{ __('Home') }}</a>
                            </li>
                            @endrole

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            </li>
           @endguest

            <form class="search">
                <input class="" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
    <div class="row no-gutters content">
       <div class="col-md-2 col-lg-2 col-xs-12 sidebar-left">
            @include('template.leftsidebar')
        </div>
        <div class="col-md-8 col-lg-8 col-xs-12 main-content">
              @yield('content')
        </div>
        <div class="col-md-2 col-lg-2 col-xs-12 sidebar-right">
         
        </div>
    </div>

</body>
<script src="{{asset('js/app.js')}}"></script>
</html>