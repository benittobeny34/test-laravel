<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width,initial-scale=1" name="viewport">
                    <title>
                        Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com
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
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="index.html">
                        <b class="logo-abbr">
                            Laravel
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
                        
                    </div>
                    <div class="header-right">
                        
                    </div>
                </div>
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
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-speedometer menu-icon">
                                </i>
                                <span class="nav-text">
                                    Dashboard
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./index.html">
                                        Home 1
                                    </a>
                                </li>
                                <!-- <li><a href="./index-2.html">Home 2</a></li> -->
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
                    @component('post.addpost')
                    @endcomponent
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