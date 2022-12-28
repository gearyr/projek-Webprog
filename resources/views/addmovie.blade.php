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
    <h1>Add movie</h1>
    <form action="/addMovie" method="post">
        @csrf
        <label for="email">Title</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Description</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Genre</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Actor</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Character Name</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Director</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Release Date</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Image Url</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="email">Background Url</label>
        <input class="blue" type="text" name="title" id="title" placeholder="title"><br>
        <label for="password">Password</label>
        <input class="blue" type="password" name="password" id="password" placeholder="password"><br>
        <input type="checkbox" name="remember" id="remember" checked={{Cookie::get('emailcookie' != null)}}> Remember Me<br>
        @if (session('status'))
        <div style="color: red">
            {{ session('message') }}
        </div>
        @endif
        <button>Create</button><br>
    </form>
</body>
</html>
