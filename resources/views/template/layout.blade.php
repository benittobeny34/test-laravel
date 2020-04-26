<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width,initial-scale=1" name="viewport">
                    <title>
                        Blog
                    </title>
                   
                                    <!-- Custom Stylesheet -->
                                    <link href="{{asset('css/templateStyle.css')}}" rel="stylesheet">
                                    </link>
                                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                                
    </head>
    <body>

            @yield('content')
    <script src="{{asset('./plugins/common/common.min.js')}}"></script>
    <script src="{{asset('./js/custom.min.js')}}"></script>
    <script src="{{asset('./js/settings.js')}}"></script>
    <script src="{{asset('./js/gleek.js')}}"></script>
    <script src="{{asset('./js/styleSwitcher.js')}}"></script>
    <!-- Chartjs -->


   
    <script src="{{ asset('./plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('./plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('./plugins/datamaps/datamaps.world.min.js') }}"></script>
   
    <script src="{{ asset('./plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('./plugins/morris/morris.min.js') }}"></script>
  
    <script src="{{ asset('./plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('./plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>

    <script src="{{ asset('./plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script> 
    <script src="{{ asset('./js/dashboard/dashboard-1.js') }}"></script>
        
    </body>
</html>