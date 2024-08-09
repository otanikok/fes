<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='artist'>
            <h1 class="artist_name">{{ $artist->name }}</h1>
        </div>
        <div class="songs">
            @foreach($artist->songs as $song)
                 <p class="song_name">{{ $song->name }}</P>
            @endforeach
        </div>
    </body>
</html>