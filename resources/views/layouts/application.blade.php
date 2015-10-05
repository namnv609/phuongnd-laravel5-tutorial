<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

        <title>
            @yield('title')
        </title>
    </head>
    <body>
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
