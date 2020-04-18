<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>

App Name - @yield('title')<br><br>

@section('sidebar')
    This is the master sidebar.
@show

<div class="container" style="border: 2px solid green;">
    @yield('content')
    @yield('not-available', View::make('welcome'))
</div>
</body>
</html>
