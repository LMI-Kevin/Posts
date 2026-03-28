<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div>
            <a href="{{ route('user.index') }}">Home</a>
            <a href="{{ route('user.posts') }}">My Posts</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>

        @yield('content')
    </body>
</html>