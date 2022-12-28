<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }

        form{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;
            background-color: #d7e6ff;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #2979ff;
        }

        label {
            text-align: left;
            color: #2979ff;
        }

        form .blue {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: black;
            font-size: 20px;
        }

        button {
            background-color: #2979ff;
            border:none;
            padding: 10px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <form action="/authenticate" method="post">
        @csrf
        <label for="email">Email</label>
        <input class="blue" type="email" name="email" id="email" placeholder="email" value={{Cookie::get('emailcookie') != null ? Cookie::get('emailcookie') : ""}}><br>
        <label for="password">Password</label>
        <input class="blue" type="password" name="password" id="password" placeholder="password" value={{Cookie::get('passwordcookie') != null ? Cookie::get('passwordcookie') : ""}}><br>
        <input type="checkbox" name="remember" id="remember" checked={{Cookie::get('emailcookie' != null)}}> Remember Me<br>
        @if (session('status'))
        <div style="color: red">
            {{ session('message') }}
        </div>
        @endif
        <button>Login</button><br>
        <p>No account? <a href="/register">register here</a></p>
    </form>
</body>
</html>
