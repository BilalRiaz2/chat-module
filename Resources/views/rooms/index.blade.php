<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">All Chats</h1>
        <ul class="list-group">
            @foreach ($chats as $chat)
                <li class="list-group-item">
                    {{$chat->name}}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
