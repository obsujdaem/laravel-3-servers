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
        }
    </style>
</head>
<body>
<h1>добавить пост</h1>
<form action="{{route('postSave')}}" method="post">
    <label for="title">введите заголовок</label>
    <input type="text" name="title">
    <label for="text">введите текст</label>
    <textarea name="text" cols="30" rows="10"></textarea>
    <label for="user_id">выберете юзера</label>
    <select name="user_id" id="">
        @foreach($users as $user)
            <option value="{{$user->server_id}}">{{$user->name}} (server id = {{$user->server_id}})</option>
        @endforeach
    </select>
    <input type="submit" value="отправить" style="margin-top: 20px;">
</form>
</body>
</html>
