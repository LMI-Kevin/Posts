<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="{{ route('login.user') }}">
            @csrf
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="********" />
            <button>Login</button>
        </form>
        <a href="{{ route('register') }}">No account yet</a>
    </body>
</html>