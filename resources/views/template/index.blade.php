<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>
                    Blog
                </title>
                <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
                    <link href="{{asset('css/preloader.css')}}" rel="stylesheet">
                        {{--
                        <link href="{{asset('css/templateStyle.css')}}" rel="stylesheet" type="text/css">
                            --}}
                            <script src="{{asset('js/jquery.min.js')}}">
                            </script>
                            <link href="{{asset('datatable/dataTables.min.css')}}" rel="stylesheet">
                                <script defer="" src="{{asset('datatable/dataTables.min.js')}}">
                                </script>
                                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
                                    <script src="{{asset('js/post.js')}}">
                                    </script>
                                    <script src="{{asset('plugins/toastr/js/toastr.min.js')}}">
                                    </script>
                                    <link href="{{asset('plugins/toastr/css/toastr.min.css')}}" rel="stylesheet" type="text/css">
                                        <script src="{{asset('js/taginput.min.js')}}">
                                        </script>
                                        <link href="{{asset('css/taginput.min.css')}}" rel="stylesheet" type="text/css">
                                            <script src="{{asset('js/taginput.min.js')}}">
                                            </script>
                                        </link>
                                    </link>
                                </link>
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
                    @yield('content')
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