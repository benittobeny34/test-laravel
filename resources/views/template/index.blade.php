<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/taginput.min.css')}}">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateStyle.css')}}">

    {{-- datatable --}}
    <link rel="stylesheet" href="{{asset('datatable/dataTables.min.css')}}">
    <script src="{{asset('datatable/dataTables.min.js')}}" defer></script>

    <script src="{{asset('js/post.js')}}"></script>
    {{-- toastr --}}
    <script src="{{asset('plugins/toastr/js/toastr.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/css/toastr.min.css')}}">
    {{-- tag input --}}
    <script src="{{asset('js/taginput.min.js')}}"></script>

</head>
<body>


<div id="main-wrapper">
    <!--**********************************
    Nav header start
***********************************-->
    <div class="nav-header">

    </div>
    <!--**********************************
    Nav header end
***********************************-->
    <!--**********************************
    Header start
***********************************-->
    <div class="header">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ __('Mallow') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('User Login') }}</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin') }}">{{ __('Admin Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
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
                    </ul>
                </div>
            </div>
        </nav>

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
                        @can('create')
                            <li>
                                <a href="{{route('addpost')}}">
                                    Create Post
                                </a>
                            </li>
                        @endcan
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

