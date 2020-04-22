<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width,initial-scale=1" name="viewport">
                    <title>
                      Blog
                    </title>
                    <!-- Favicon icon -->
                    <link href="images/favicon.png" rel="icon" sizes="16x16" type="image/png">
                        <!-- Pignose Calender -->
                        <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
                            <!-- Chartist -->
                            <link href="./plugins/chartist/css/chartist.min.css" rel="stylesheet">
                                <link href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css" rel="stylesheet">
                                    <!-- Custom Stylesheet -->
                                    <link href="{{asset('css/templateStyle.css')}}" rel="stylesheet">
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
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
</html>