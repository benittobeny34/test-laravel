
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/templateStyle.css')}}"> --}}
  <script src="{{asset('js/jquery.min.js')}}"></script>
   
    <link rel="stylesheet" href="{{asset('datatable/dataTables.min.css')}}">
    <script src="{{asset('datatable/dataTables.min.js')}}" defer></script>

    
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
     <script src="{{asset('js/post.js')}}"></script>
   
    <script src="{{asset('plugins/toastr/js/toastr.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/css/toastr.min.css')}}">
  
    <script src="{{asset('js/taginput.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/taginput.min.css')}}">
   <script src="{{asset('js/taginput.min.js')}}"></script>
</head>
<body>
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

</body>
<script src="{{asset('js/app.js')}}"></script>
</html>