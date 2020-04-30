<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateStyle.css')}}">

    <link rel="stylesheet" href="{{asset('datatable/dataTables.min.css')}}">
    <script src="{{asset('datatable/dataTables.min.js')}}" defer></script>
    <script src="{{asset('js/post.js')}}"></script>
    <script src="{{asset('plugins/toastr/js/toastr.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/css/toastr.min.css')}}">


    <style type="text/css">
        /*view page style*/
        .operations {
            margin: 1rem;
            display: none;
        }

    </style>


</head>
<body>


<div id="main-wrapper">
    <!--**********************************
    Nav header start
***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="index.html">
                <b class="logo-abbr">
                    <img alt="" src="images/logo.png">
                    </img>
                </b>
                <span class="logo-compact">
                            <img alt="" src="./images/logo-compact.png"/>
                        </span>
                <span class="brand-title">
                            <img alt="" src="images/logo-text.png">
                            </img>
                        </span>
            </a>
        </div>
    </div>
    <!--**********************************
    Nav header end
***********************************-->
    <!--**********************************
    Header start
***********************************-->
    <div class="header">
        <div class="header-content clearfix">
            <div class="nav-control">
                <div class="hamburger">
                            <span class="toggle-icon">
                                <i class="icon-menu">
                                </i>
                            </span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1">
                                    <i class="mdi mdi-magnify">
                                    </i>
                                </span>
                    </div>
                    <input aria-label="Search Dashboard" class="form-control" placeholder="Search Dashboard"
                           type="search">
                    <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                            <input class="form-control" placeholder="Search" type="text">
                            </input>
                        </form>
                    </div>
                    </input>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    @if(Auth::check())
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        >
                            @csrf
                        </form>
                    @else
                        <li class="icons dropdown">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="icons dropdown">
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>

                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    <hr>
    <!--**********************************
    Header end ti-comment-alt
***********************************-->
    <!--**********************************
    Sidebar start
***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">
                    Dashboard
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon-speedometer menu-icon">
                        </i>
                        <span class="nav-text">
                                    Dashboard
                                </span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{route('home.index')}}">
                                Home
                            </a>
                        </li>
                        <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                    </ul>
                </li>
                <li class="mega-menu mega-menu-sm">
                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon-globe-alt menu-icon">
                        </i>
                        <span class="nav-text">
                                    Post option
                                </span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{route('addpost')}}">
                                Create Post
                            </a>
                        </li>
                        <li>
                            <a href="{{route('home.index')}}">
                                view All Posts
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-label">
                    Activities
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon-envelope menu-icon">
                        </i>
                        <span class="nav-text">
                                     Activity
                                </span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{route('your-posts')}}">
                                Your Posts
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Your Comments
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
    Sidebar end
***********************************-->
    <!--**********************************
    Content body start
***********************************-->
    <div class="content-body">
        <div class="container-fluid mt-3">
            @yield('content')
        </div>
    </div>
    <!--**********************************
    Content body end
***********************************-->
    <!--**********************************
    Footer start
***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>
                Copyright © Designed & Developed by
                <a href="https://themeforest.net/user/quixlab">
                    Quixlab
                </a>
                2018
            </p>
        </div>
    </div>
    <!--**********************************
    Footer end
***********************************-->
</div>
<!--**********************************
Main wrapper end
***********************************-->


</body>
<script src="{{asset('plugins/common/common.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/gleek.js')}}"></script>
<script src="{{asset('js/styleSwitcher.js')}}"></script>

<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

</html>
