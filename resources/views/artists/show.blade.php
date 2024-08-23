<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>アーティスト名</h1>
        <div class='artist'>
            <h1 class="artist_name">アーティスト名:{{ $artist->name }}</h1>
        </div>
        <div class="songs">
            <h2>曲名</h2>
            @foreach($artist->songs as $song)
                 <p class="song_name">{{ $song->name }}</P>
            @endforeach
        </div>
        <a href ="/song/create">曲の登録</a>
    </body>
</html>