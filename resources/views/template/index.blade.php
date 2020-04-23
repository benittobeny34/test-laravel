<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width,initial-scale=1" name="viewport">
                    <title>
                      Blog
                    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('js/post.js')}}"></script>
                    
                                    <!-- Custom Stylesheet -->
                                    <link href="{{asset('css/templateStyle.css')}}" rel="stylesheet">
                               
                                   
                                
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <!--*******************
        Preloader start
    ********************-->
    
        <!--*******************
        Preloader end
    ********************-->
        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">
            <!--**********************************
            Nav header start
        ***********************************-->
            <div class="nav-header" style="text-align: center;padding:1rem;background-color: gray;">
               <h2>Blog</h2>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->
            <!--**********************************
            Header start
        ***********************************-->
            <div class="header">
                         @component('layouts.app')
                        @endcomponent

            </div>
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
            <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="nk-sidebar">
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                   <li>
                            
                                <li>
                                    <a href="/home">
                                        Your Posts
                                    </a>
                                </li>

                                <li>
                                    <a href="/addnewpost">
                                        New Post
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Other field
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Other field
                                    </a>
                                </li>
                             
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
                <!-- #/ container -->
           
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

    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/dashboard-1.js')}}"></script>
    <script src="{{asset('js/gleek.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>
   
</html>