<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Blank')</title>
</head>
<body>
   
    <div>
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="/visitor">visited</a></li>
        
        </ul>

    </div>

    @yield('content')


</body>
</html>