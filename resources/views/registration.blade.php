<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 200px;
            margin-bottom: 50px;
        }
        a {
            font-size: 30px;
            color: fuchsia;
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1>добавить юзера</h1>
<form action="{{route('registration')}}" method="post">
    <label for="name">введите имя</label>
    <input type="text" name="name">
    <label for="password">введите пароль</label>
    <input type="password" name="password">
    <label for="email">введите имейл</label>
    <input type="email" name="email">
    <input type="submit" value="зарегистрировать" style="margin-top: 20px;">
</form>

<a href="{{route('postIndex')}}">добавить пост для user'</a>

</body>
</html>
