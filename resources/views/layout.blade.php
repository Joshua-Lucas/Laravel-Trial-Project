<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Blank')</title>
</head>
<body>
   
    <div>
        <ul>
            <li><a href="/home">home</a></li>
            <li><a href="/create">new project log</a></li>
            <li><a href="/projects">Work Logs</a></li>
        
        </ul>

    </div>

    @yield('content')


</body>
</html>