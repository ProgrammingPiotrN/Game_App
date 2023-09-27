<html>
    <head>
        <title>
            @yield('title', $appName)
        </title>
        <style>
            td{
                padding-right: 15px;
            }
        </style>
    </head>
    <body>
        <h1>{{ $appName }}</h1>
        <div class="sidebar">
            @section('sidebar2')
                <ul>
                    <li><a href="#">...</a></li>
                </ul>
            @show
        </div>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
