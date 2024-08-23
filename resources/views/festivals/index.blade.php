<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>フェス名</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>フェス一覧</h1>
        <div class='posts'>
            @foreach ($festivals as $festival)
                <div class='post'>
                    <h2 class='title'><a href="/fes/{{$festival->id}}">フェス名:{{ $festival->name }}</a></h2>
                    <p class='body'>概要:{{ $festival->overview }}</p>
                    <p class='body'>内容:{{ $festival->date }}</p>
                </div>
            @endforeach
        </div>
        <a href="/fes/create">フェス登録</a>
        <a href="/artist/create">アーティスト登録</a>
    </body>
</html>