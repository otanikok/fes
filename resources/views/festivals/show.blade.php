<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>フェス名</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>フェス名</h1>
        <div class='festival'>
            <h1 class="festival_name">フェス名:{{ $festival->name }}</h1>
            <p class="festival_overview">フェス概要:{{ $festival->overview}}</p>
        </div>
        <div class="artists">
            <h2>アーティスト名</h2>
            @foreach($festival->artists as $artist)
                 <p class="artist_name"><a href="/artist/{{$artist->id}}">{{ $artist->name }}</a></P>
            @endforeach
        </div>
        <a href ="/">戻る</a>
        <a href ="/festivals/{{$festival->id}}/edit">編集</a>
    </body>
</html>