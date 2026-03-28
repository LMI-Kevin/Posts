<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form method="POST" action="{{ route('register.user') }}">
            @csrf
            <input type="name" name="name" placeholder="Name" />
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="********" />
            <button>Register</button>
        </form>
        <a href="{{ route('login') }}">Back to Login</a>
    </body>
</html>