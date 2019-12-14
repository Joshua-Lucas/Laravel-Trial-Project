<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Blank')</title>
</head>
<body>
   
    <div>
        <ul>
            <li><a href="/projects">home</a></li>
            <li><a href="/projects/create">new project log</a></li>
        
        </ul>

    </div>

    @yield('content')


</body>
</html>