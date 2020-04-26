@extends('template.layout')
        <!--**********************************
        Main wrapper start
    ***********************************-->
@section('content')
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
                            <input aria-label="Search Dashboard" class="form-control" placeholder="Search Dashboard" type="search">
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
                            <a  href="{{ route('logout') }}"
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
                              <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                
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
                                    <a href="./index.html">
                                        Home 1
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
                                    Layouts
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./layout-blank.html">
                                        Blank
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-one-column.html">
                                        One Column
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-two-column.html">
                                        Two column
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-compact-nav.html">
                                        Compact Nav
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-vertical.html">
                                        Vertical
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-horizontal.html">
                                        Horizontal
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-boxed.html">
                                        Boxed
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-wide.html">
                                        Wide
                                    </a>
                                </li>
                                <li>
                                    <a href="./layout-fixed-header.html">
                                        Fixed Header
                                    </a>
                                </li>
                                <li>
                                    <a href="layout-fixed-sidebar.html">
                                        Fixed Sidebar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-label">
                            Apps
                        </li>
                        <li>
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-envelope menu-icon">
                                </i>
                                <span class="nav-text">
                                    Email
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./email-inbox.html">
                                        Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="./email-read.html">
                                        Read
                                    </a>
                                </li>
                                <li>
                                    <a href="./email-compose.html">
                                        Compose
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-screen-tablet menu-icon">
                                </i>
                                <span class="nav-text">
                                    Apps
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./app-profile.html">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="./app-calender.html">
                                        Calender
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-graph menu-icon">
                                </i>
                                <span class="nav-text">
                                    Charts
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./chart-flot.html">
                                        Flot
                                    </a>
                                </li>
                                <li>
                                    <a href="./chart-morris.html">
                                        Morris
                                    </a>
                                </li>
                                <li>
                                    <a href="./chart-chartjs.html">
                                        Chartjs
                                    </a>
                                </li>
                                <li>
                                    <a href="./chart-chartist.html">
                                        Chartist
                                    </a>
                                </li>
                                <li>
                                    <a href="./chart-sparkline.html">
                                        Sparkline
                                    </a>
                                </li>
                                <li>
                                    <a href="./chart-peity.html">
                                        Peity
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-label">
                            UI Components
                        </li>
                        <li>
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-grid menu-icon">
                                </i>
                                <span class="nav-text">
                                    UI Components
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./ui-accordion.html">
                                        Accordion
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-alert.html">
                                        Alert
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-badge.html">
                                        Badge
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-button.html">
                                        Button
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-button-group.html">
                                        Button Group
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-cards.html">
                                        Cards
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-carousel.html">
                                        Carousel
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-dropdown.html">
                                        Dropdown
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-list-group.html">
                                        List Group
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-media-object.html">
                                        Media Object
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-modal.html">
                                        Modal
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-pagination.html">
                                        Pagination
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-popover.html">
                                        Popover
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-progressbar.html">
                                        Progressbar
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-tab.html">
                                        Tab
                                    </a>
                                </li>
                                <li>
                                    <a href="./ui-typography.html">
                                        Typography
                                    </a>
                                </li>
                                <!-- </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                                <li>
                                    <a href="./uc-nestedable.html">
                                        Nestedable
                                    </a>
                                </li>
                                <li>
                                    <a href="./uc-noui-slider.html">
                                        Noui Slider
                                    </a>
                                </li>
                                <li>
                                    <a href="./uc-sweetalert.html">
                                        Sweet Alert
                                    </a>
                                </li>
                                <li>
                                    <a href="./uc-toastr.html">
                                        Toastr
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a aria-expanded="false" href="widgets.html">
                                <i class="icon-badge menu-icon">
                                </i>
                                <span class="nav-text">
                                    Widget
                                </span>
                            </a>
                        </li>
                        <li class="nav-label">
                            Forms
                        </li>
                        <li>
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-note menu-icon">
                                </i>
                                <span class="nav-text">
                                    Forms
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./form-basic.html">
                                        Basic Form
                                    </a>
                                </li>
                                <li>
                                    <a href="./form-validation.html">
                                        Form Validation
                                    </a>
                                </li>
                                <li>
                                    <a href="./form-step.html">
                                        Step Form
                                    </a>
                                </li>
                                <li>
                                    <a href="./form-editor.html">
                                        Editor
                                    </a>
                                </li>
                                <li>
                                    <a href="./form-picker.html">
                                        Picker
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-label">
                            Table
                        </li>
                        <li>
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-menu menu-icon">
                                </i>
                                <span class="nav-text">
                                    Table
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a aria-expanded="false" href="./table-basic.html">
                                        Basic Table
                                    </a>
                                </li>
                                <li>
                                    <a aria-expanded="false" href="./table-datatable.html">
                                        Data Table
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-label">
                            Pages
                        </li>
                        <li>
                            <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                <i class="icon-notebook menu-icon">
                                </i>
                                <span class="nav-text">
                                    Pages
                                </span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./page-login.html">
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="./page-register.html">
                                        Register
                                    </a>
                                </li>
                                <li>
                                    <a href="./page-lock.html">
                                        Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                                        Error
                                    </a>
                                    <ul aria-expanded="false">
                                        <li>
                                            <a href="./page-error-404.html">
                                                Error 404
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./page-error-403.html">
                                                Error 403
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./page-error-400.html">
                                                Error 400
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./page-error-500.html">
                                                Error 500
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./page-error-503.html">
                                                Error 503
                                            </a>
                                        </li>
                                    </ul>
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
                      @yield('main-content')
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
 @endsection